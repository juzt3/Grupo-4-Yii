<?php
/* @var $this DonacionmedulaController */
/* @var $model Donacionmedula */
?>

<?php
$this->breadcrumbs=array(
	'Donación de Medula'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Mostrar Donaciones de Medula', 'url'=>array('index')),
	array('label'=>'Gestionar Donaciones de Medula', 'url'=>array('admin')),
);
?>

<h1>Create Donacionmedula</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>