<?php

class HistorialenfermedadesController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create', 'delete', 'admin'),
				'roles'=>array('Administrador del Sistema', 'Administrador de Donaciones y Necesitades Medicas', 'Secretaria', 'Jefe Area de Salud'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('update'),
				'roles'=>array('Administrador del Sistema', 'Administrador de Donaciones y Necesitades Medicas', 'Jefe Area de Salud'),
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
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($id)
	{
		$model=new Historialenfermedades;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Historialenfermedades']))
		{
			$model->attributes=$_POST['Historialenfermedades'];
			$model->rut=$id;
			if($model->save())
				$this->redirect(array('donantes/view','id'=>$model->rut));
		}

		$this->render('create',array(
			'model'=>$model,
			'id'=>$id
		));
	}
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)//Modificado para deshabilitar y no eliminar
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Historialenfermedades']))
		{
			$model->attributes=$_POST['Historialenfermedades'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idhistorial));
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
		$model=new Historialenfermedades;
		$model=$model->findByPk($id);
		$model->fecha_cura=new CDbExpression('NOW()');
		$model->save();
		$enfermedades = new Historialenfermedades;
		$criteria = new CDbCriteria();
		$criteria->addCondition('fecha_cura IS NULL');
		$enfermedades=$enfermedades->findAll($criteria);
		if(empty($enfermedades)){
			$donante = new Donantes;
			$donante = $donante->findByPk($model->rut);
			if($donante->fecha_muerte === NULL){
				$donante->habilitado='Si';
				$donante->save();
			}
		}

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Historialenfermedades');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Historialenfermedades('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Historialenfermedades']))
			$model->attributes=$_GET['Historialenfermedades'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}


	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Historialenfermedades the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Historialenfermedades::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Historialenfermedades $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='historialenfermedades-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

}
