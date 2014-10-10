<?php
/* @var $this HistorialenfermedadesController */
/* @var $model Historialenfermedades */

$this->breadcrumbs=array(
	'Historialenfermedades'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Historial de Enfermedades', 'url'=>array('index')),
	array('label'=>'Administrar Historial de Enfermedades', 'url'=>array('admin')),
);
?>

<h1>Crear Historial de Enfermedades</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'id'=>$id)); ?>