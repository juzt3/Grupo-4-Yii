<?php

class DTieneOrganosController extends Controller
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
				'actions'=>array('create','delete'),
				'roles'=>array('Administrador del Sistema', 'Administrador de Donaciones y Necesitades Medicas', 'Secretaria', 'Jefe Area de Salud'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','update'),
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
		$model=new DTieneOrganos;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['DTieneOrganos'])) {
			foreach ($_POST['DTieneOrganos']['id_organo'] as $id_organo) {
				$model=new DTieneOrganos;
				$model->rut=$id;
				$model->id_organo=$id_organo;
				$model->save();
			}
				$this->redirect(array('donantes/view','id'=>$id));
		}
		$this->render('create',array(
			'model'=>$model,
			'rut'=>$id,
		));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('DTieneOrganos');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new DTieneOrganos('search');
		$model->unsetAttributes();  // clear any default values
		if (isset($_GET['DTieneOrganos'])) {
			$model->attributes=$_GET['DTieneOrganos'];
		}

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return DTieneOrganos the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=DTieneOrganos::model()->findByPk($id);
		if ($model===null) {
			throw new CHttpException(404,'The requested page does not exist.');
		}
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param DTieneOrganos $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax']==='dtiene-organos-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}