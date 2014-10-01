<?php
/* @var $this UrgenciaController */
/* @var $model Urgencia */

$this->breadcrumbs=array(
	'Urgencias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Urgencia', 'url'=>array('index')),
	array('label'=>'Manage Urgencia', 'url'=>array('admin')),
);
?>

<h1>Create Urgencia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>