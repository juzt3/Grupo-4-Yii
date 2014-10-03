<?php
/* @var $this CentrosmedicosController */
/* @var $model Centrosmedicos */

$this->breadcrumbs=array(
	'Centrosmedicoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Centrosmedicos', 'url'=>array('index')),
	array('label'=>'Manage Centrosmedicos', 'url'=>array('admin')),
);
?>

<h1>Create Centrosmedicos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>