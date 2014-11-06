<?php
/* @var $this HistorialdonacionmedulaController */
/* @var $model Historialdonacionmedula */
?>

<?php
$this->breadcrumbs=array(
	'Historialdonacionmedulas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Historialdonacionmedula', 'url'=>array('index')),
	array('label'=>'Manage Historialdonacionmedula', 'url'=>array('admin')),
);
?>

<h1>Create Historialdonacionmedula</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>