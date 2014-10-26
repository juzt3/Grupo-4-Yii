<?php
/* @var $this DonantesController */
/* @var $model Donantes */
?>

<?php
$this->breadcrumbs=array(
	'Donantes'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Lista de Donantes', 'url'=>array('index')),
	array('label'=>'Administrar Donantes', 'url'=>array('admin')),
);
?>

<h1>Registrar Donantes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>