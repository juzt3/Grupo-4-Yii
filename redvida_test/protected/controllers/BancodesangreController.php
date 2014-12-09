<?php

class BancodesangreController extends Controller
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
				'actions'=>array('mailmasivo'),
				'roles'=>array('Administrador del Sistema', 'Administrador de Donaciones y Necesitades Medicas', 'Secretaria', 'Jefe Area de Salud'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	* accion para mandar correo masivo a los donantes del tipo de sangre seleccionado.
	*/
	public function actionMailmasivo($tipo_sangre)
	{
		$mails_donantes = Donantes::model()->findAll(array(
										'select'=>'email',
										'condition'=>'tiposangre = :tipo_sangre AND fecha_muerte IS NOT NULL',
										'params'=>array(':tipo_sangre'=>$tipo_sangre),
					));
		$nombre = base64_encode('Felipe Gatica Cea');
		if ($tipo_sangre !== 'O+' || $tipo_sangre !== 'AB+') {
			$subject = base64_encode('Se necesitan donantes de sangre tipo '.$tipo_sangre.' u O+, donador universal.');
			$body = 'Se solicita a todos los donantes de sangre voluntarios de tipo '.$tipo_sangre.' u O+, donador universal, a concurrir a donar urgentemene.';
		}
		else{
			if ($tipo_sangre === 'O+') {
				$subject = base64_encode('Se necesitan donantes de sangre tipo '.$tipo_sangre.'.');
				$body = 'Se solicita a todos los donantes de sangre voluntarios de tipo '.$tipo_sangre.' a concurrir a donar urgentemene.';
			}
			if($tipo_sangre === 'AB+'){
				$subject = base64_encode('Se necesitan donantes de sangre de todo tipo');
				$body = 'Se solicita a todos los donantes de sangre voluntarios de cualquier tipo a concurrir a donar urgentemene.';	
			}
		}

		$headers = "From: $nombre <{fegatica@alumnos.ubiobio.cl}>\r\n".
				"Reply-To: {fegatica@alumnos.ubiobio.cl}\r\n".
				"MIME-Version: 1.0\r\n".
				"Content-Type: text/plain; charset=UTF-8";
		
		foreach ($mails_donantes as $email) {
			echo "Entro";
			mail($email,$subject,$body,$headers);
		}
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
		$model=new Bancodesangre;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Bancodesangre'])) {
			$model->attributes=$_POST['Bancodesangre'];
			if ($model->save()) {
				$this->redirect(array('view','id'=>$model->id));
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

		if (isset($_POST['Bancodesangre'])) {
			$model->attributes=$_POST['Bancodesangre'];
			if ($model->save()) {
				$this->redirect(array('view','id'=>$model->id));
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
		if (Yii::app()->request->isPostRequest) {
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if (!isset($_GET['ajax'])) {
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
			}
		} else {
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
		}
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Bancodesangre');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Bancodesangre('search');
		$model->unsetAttributes();  // clear any default values
		if (isset($_GET['Bancodesangre'])) {
			$model->attributes=$_GET['Bancodesangre'];
		}

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Bancodesangre the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Bancodesangre::model()->findByPk($id);
		if ($model===null) {
			throw new CHttpException(404,'The requested page does not exist.');
		}
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Bancodesangre $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax']==='bancodesangre-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}