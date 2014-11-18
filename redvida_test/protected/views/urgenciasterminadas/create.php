<?php
/* @var $this UrgenciasterminadasController */
/* @var $model Urgenciasterminadas */

$this->breadcrumbs=array(
	'Urgenciasterminadases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Urgenciasterminadas', 'url'=>array('index')),
	array('label'=>'Manage Urgenciasterminadas', 'url'=>array('admin')),
);
?>

<h1>Create Urgenciasterminadas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>