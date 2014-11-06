<?php
/* @var $this HistorialdonacionsangreController */
/* @var $model Historialdonacionsangre */
?>

<?php
$this->breadcrumbs=array(
	'Historialdonacionsangres'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Historialdonacionsangre', 'url'=>array('index')),
	array('label'=>'Manage Historialdonacionsangre', 'url'=>array('admin')),
);
?>

<h1>Create Historialdonacionsangre</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>