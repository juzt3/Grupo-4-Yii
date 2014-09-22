<?php
/* @var $this DonantesController */
/* @var $model Donantes */

$this->breadcrumbs=array(
	'Donantes'=>array('index'),
	$model->rut=>array('view','id'=>$model->rut),
	'Update',
);

$this->menu=array(
	array('label'=>'List Donantes', 'url'=>array('index')),
	array('label'=>'Create Donantes', 'url'=>array('create')),
	array('label'=>'View Donantes', 'url'=>array('view', 'id'=>$model->rut)),
	array('label'=>'Manage Donantes', 'url'=>array('admin')),
);
?>

<h1>Update Donantes <?php echo $model->rut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>