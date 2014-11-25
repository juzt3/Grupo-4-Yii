<?php
/* @var $this DonacionmedulaController */
/* @var $model Donacionmedula */
?>

<?php
$this->breadcrumbs=array(
	'Donacionmedulas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Donacionmedula', 'url'=>array('index')),
	array('label'=>'Manage Donacionmedula', 'url'=>array('admin')),
);
?>

<h1>Create Donacionmedula</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>