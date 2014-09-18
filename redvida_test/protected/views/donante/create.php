<?php
/* @var $this DonanteController */
/* @var $model Donante */

$this->breadcrumbs=array(
	'Donantes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Donante', 'url'=>array('index')),
	array('label'=>'Manage Donante', 'url'=>array('admin')),
);
?>

<h1>Create Donante</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>