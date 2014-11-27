<?php

class DonantesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'indexmuertos', 'indexdesactivados', 'setdead'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$hist_enfermedades = Historialenfermedades::model()->find(array(
													'condition'=>'rut = :rut',
													'params'=>array(':rut'=>$this->id),
													));
		$this->render('view',array(
			'model'=>$this->loadModel($id), 'hist_enfermedades'=>$hist_enfermedades,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Donantes;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Donantes']))
		{
			$model->attributes=$_POST['Donantes'];
			if($model->save())
				$this->redirect(array('historialenfermedades/create','id'=>$model->rut));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Donantes']))
		{
			$model->attributes=$_POST['Donantes'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->rut));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if (Yii::app()->request->isPostRequest) {
			// we only allow deletion via POST request
			$model=$this->loadModel($id);
			if($model->habilitado=='Si')
				$model->habilitado='No';
			else
				$model->habilitado='Si';
			$model->save();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(Yii::app()->getRequest()->urlReferrer);
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		//solo carga los donantes vivos, sin enfermedades y activos.
		$dataProvider=new CActiveDataProvider('Donantes', array(
			'criteria'=>array(
					'condition'=>'t.habilitado="Si" AND t.fecha_muerte IS NULL AND rut NOT IN (SELECT rut FROM HistorialEnfermedades)',
				),
		));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionIndexmuertos()
	{
		//solo carga los donantes vivos, sin enfermedades y activos.
		$dataProvider=new CActiveDataProvider('Donantes', array(
			'criteria'=>array(
					'condition'=>'t.fecha_muerte IS NOT NULL',
				),
		));
		$this->render('indexmuertos',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionIndexdesactivados()
	{
		//solo carga los donantes vivos, sin enfermedades y activos.
		$dataProvider=new CActiveDataProvider('Donantes', array(
			'criteria'=>array(
					'condition'=>'t.habilitado="No"',
				),
		));
		$this->render('indexdesactivados',array(
			'dataProvider'=>$dataProvider,
		));
	}


	public function actionSetdead($id) //registra la fecha de muerte al dia actual
	{
		if (Yii::app()->request->isPostRequest) {
			// we only allow deletion via POST request
			$model=$this->loadModel($id);
			if($model->fecha_muerte == NULL ){
				$model->fecha_muerte=new CDbExpression('NOW()');
				$model->save();
			}

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(Yii::app()->getRequest()->urlReferrer);
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Donantes('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Donantes']))
			$model->attributes=$_GET['Donantes'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Donantes the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Donantes::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'El Donante que busca no existe.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Donantes $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='donantes-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
