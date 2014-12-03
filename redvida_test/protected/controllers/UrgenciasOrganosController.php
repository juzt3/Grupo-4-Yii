<?php

class UrgenciasOrganosController extends Controller
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
		$model=new UrgenciasOrganos;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['UrgenciasOrganos'])) {
			$model->attributes=$_POST['UrgenciasOrganos'];
			if ($model->save()) {
				$this->redirect(array('view','id'=>$model->id_urgencia_organo));
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

		if (isset($_POST['UrgenciasOrganos'])) {
			$model->attributes=$_POST['UrgenciasOrganos'];
			if ($model->save()) {
				$this->redirect(array('view','id'=>$model->id_urgencia_organo));
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
		$urgencia_t = new UrgenciasOrganoTerminada;
		$urgenciaorgano = $this->loadModel($id);
		$urgencia_t->id_organo = $urgenciaorgano->id_organo;
		$urgencia_t->rut = $urgenciaorgano->rut;
		$organo = new DTieneOrganos;
		if (isset($_POST['UrgenciasOrganoTerminada'], $_POST['DTieneOrganos'])) {
			if (Yii::app()->request->isPostRequest) 
			{
			// we only allow deletion via POST request
			$urgencia_t->motivo = $_POST['UrgenciasOrganoTerminada']['motivo'];
			$urgencia_t->cod_cm = $urgenciaorgano->cod_cm;
			$urgencia_t->id_enfermedad_urgencia = $urgenciaorgano->id_enfermedad_urgencia;
			$urgencia_t->nombre_paciente = $urgenciaorgano->nombre_paciente;
			$urgencia_t->apellido_pat = $urgenciaorgano->apellido_pat;
			$urgencia_t->apellido_mat = $urgenciaorgano->apellido_mat;
			$urgencia_t->afiliacion = $urgenciaorgano->afiliacion;
			$urgencia_t->grado_urgencia = $urgenciaorgano->grado_urgencia;
			$urgencia_t->fecha_ini = $urgenciaorgano->fecha_ini;
			$urgencia_t->fecha_fin = new CDbExpression('NOW()');

			$organo = $organo->find(array('condition'=>'rut=:rut_donante AND id_organo = :id_organo_donante', 
											'params'=>array(':rut_donante'=>$_POST['DTieneOrganos']['rut'], ':id_organo_donante'=>$urgencia_t->id_organo)));
			$organo->transplantado ='Si'; 
			$organo->save();
			$urgencia_t->save();
			$this->loadModel($id)->delete();
			}

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if (!isset($_GET['ajax'])) {
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('urgenciasorganoterminada/admin'));
			}
		} 
		$this->render('motivo',array(
			'model'=>$urgencia_t,
			'organo'=>$organo,
		));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('UrgenciasOrganos');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new UrgenciasOrganos('search');
		$model->unsetAttributes();  // clear any default values
		if (isset($_GET['UrgenciasOrganos'])) {
			$model->attributes=$_GET['UrgenciasOrganos'];
		}

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return UrgenciasOrganos the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=UrgenciasOrganos::model()->findByPk($id);
		if ($model===null) {
			throw new CHttpException(404,'The requested page does not exist.');
		}
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param UrgenciasOrganos $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax']==='urgencias-organos-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}