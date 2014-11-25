<?php
/* @var $this DonacionsangreController */
/* @var $model Donacionsangre */
?>

<?php
$this->breadcrumbs=array(
	'Donacionsangres'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Donacionsangre', 'url'=>array('index')),
	array('label'=>'Manage Donacionsangre', 'url'=>array('admin')),
);
?>

<h1>Create Donacionsangre</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>