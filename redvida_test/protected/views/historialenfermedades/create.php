<?php
/* @var $this HistorialenfermedadesController */
/* @var $model Historialenfermedades */

$this->breadcrumbs=array(
	'Historialenfermedades'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Historialenfermedades', 'url'=>array('index')),
	array('label'=>'Manage Historialenfermedades', 'url'=>array('admin')),
);
?>

<h1>Create Historial de Enfermedades</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>