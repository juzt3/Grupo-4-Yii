<?php
/* @var $this HistorialenfermedadesController */
/* @var $model Historialenfermedades */

$this->breadcrumbs=array(
	'Historialenfermedades'=>array('index'),
	$model->idhistorial=>array('view','id'=>$model->idhistorial),
	'Update',
);

$this->menu=array(
	array('label'=>'List Historialenfermedades', 'url'=>array('index')),
	array('label'=>'Create Historialenfermedades', 'url'=>array('create')),
	array('label'=>'View Historialenfermedades', 'url'=>array('view', 'id'=>$model->idhistorial)),
	array('label'=>'Manage Historialenfermedades', 'url'=>array('admin')),
);
?>

<h1>Update Historialenfermedades <?php echo $model->idhistorial; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>