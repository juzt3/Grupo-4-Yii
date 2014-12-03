<?php

class UrgenciasMedulaController extends Controller
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
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new UrgenciasMedula;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['UrgenciasMedula'])) {
			$model->attributes=$_POST['UrgenciasMedula'];
			if ($model->save()) {
				$this->redirect(array('view','id'=>$model->id_urgencia_medula));
			}
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

		if (isset($_POST['UrgenciasMedula'])) {
			$model->attributes=$_POST['UrgenciasMedula'];
			if ($model->save()) {
				$this->redirect(array('view','id'=>$model->id_urgencia_medula));
			}
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
		$urgencia_t = new UrgenciasMedulaTerminada;
		if (isset($_POST['UrgenciasMedulaTerminada'])) {
			if (Yii::app()->request->isPostRequest) 
			{
			// we only allow deletion via POST request
			$urgenciamedula = $this->loadModel($id);
			
			$urgencia_t->motivo = $_POST['UrgenciasMedulaTerminada']['motivo'];
			$urgencia_t->cod_cm = $urgenciamedula->cod_cm;
			$urgencia_t->id_enfermedad_urgencia = $urgenciamedula->id_enfermedad_urgencia;
			$urgencia_t->rut = $urgenciamedula->rut;
			$urgencia_t->nombre_paciente = $urgenciamedula->nombre_paciente;
			$urgencia_t->apellido_pat = $urgenciamedula->apellido_pat;
			$urgencia_t->apellido_mat = $urgenciamedula->apellido_mat;
			$urgencia_t->afiliacion = $urgenciamedula->afiliacion;
			$urgencia_t->grado_urgencia = $urgenciamedula->grado_urgencia;
			$urgencia_t->tipo_transplante = $urgenciamedula->tipo_transplante;
			$urgencia_t->fecha_ini = $urgenciamedula->fecha_ini;
			$urgencia_t->fecha_fin = new CDbExpression('NOW()');

			$urgencia_t->save();
			}

			//$this->loadModel($id)->delete();
			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if (!isset($_GET['ajax'])) {
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
			}
		} 
		$this->render('motivo',array(
			'model'=>$urgencia_t,
		));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('UrgenciasMedula');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new UrgenciasMedula('search');
		$model->unsetAttributes();  // clear any default values
		if (isset($_GET['UrgenciasMedula'])) {
			$model->attributes=$_GET['UrgenciasMedula'];
		}

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return UrgenciasMedula the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=UrgenciasMedula::model()->findByPk($id);
		if ($model===null) {
			throw new CHttpException(404,'The requested page does not exist.');
		}
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param UrgenciasMedula $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax']==='urgencias-medula-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}