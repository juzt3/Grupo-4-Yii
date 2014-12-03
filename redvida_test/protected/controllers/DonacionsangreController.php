<?php

class DonacionsangreController extends Controller
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
	public function actionCreate($id)
	{
		$donante= Donantes::model()->findByPk($id);
		$model=new Donacionsangre;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Donacionsangre'])) {
			$model->attributes=$_POST['Donacionsangre'];
			$model->rut=$id;
			$model->cantidad_sangre='450';
			$model->tipo_sangre=$donante->tiposangre;
			$model->fecha_donacionsangre=new CDbExpression('NOW()');
                        
            $edad=Donantes::validaEdad(Donantes::donanteEdad($id));
                        
			if($donante->habilitado === 'Si' && $donante->fecha_muerte === NULL ){
				if($edad >18 && $edad <65 ){
                                    if ($model->save()) {
					$this->redirect(array('view','id'=>$model->id_donacionsangre));
                                    }
                                }
                                else {
                                        throw new CHttpException('Lo siento, no puede donar sangre, no se encuentra dentro del rango de edad permitido(entre 7 y 65)');
                                }
			}
			else{
				$model->addError('observaciones',"Este donante se encuentra inhabilitado de donar. No vuelva a intentarlo.");
			}
                        if($donante->habilitado === 'Si' && $donante->fecha_muerte === NULL){
				if ($model->save()) {
					$this->redirect(array('view','id'=>$model->id_donacionsangre));
				}
			}
			else{
				$model->addError('observaciones',"Este donante se encuentra inhabilitado de donar. No vuelva a intentarlo.");
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

		if (isset($_POST['Donacionsangre'])) {
			$model->attributes=$_POST['Donacionsangre'];
			if ($model->save()) {
				$this->redirect(array('view','id'=>$model->id_donacionsangre));
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
			$donacion = $this->loadModel($id);
			$donacion->usada = "Si";
			$donacion->save();

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
		$dataProvider=new CActiveDataProvider('Donacionsangre', array(
			'criteria'=>array(
					'condition'=>'t.usada="No" AND 0<(SELECT DATEDIFF(t.fecha_expiracion, NOW()))',
				),
		));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Donacionsangre('search');
		$model->unsetAttributes();  // clear any default values
		if (isset($_GET['Donacionsangre'])) {
			$model->attributes=$_GET['Donacionsangre'];
		}

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Donacionsangre the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Donacionsangre::model()->findByPk($id);
		if ($model===null) {
			throw new CHttpException(404,'The requested page does not exist.');
		}
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Donacionsangre $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax']==='donacionsangre-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}