<?php
/* @var $this DonanteController */
/* @var $model Donante */

$this->breadcrumbs=array(
	'Donantes'=>array('index'),
	$model->rut=>array('view','id'=>$model->rut),
	'Update',
);

$this->menu=array(
	array('label'=>'List Donante', 'url'=>array('index')),
	array('label'=>'Create Donante', 'url'=>array('create')),
	array('label'=>'View Donante', 'url'=>array('view', 'id'=>$model->rut)),
	array('label'=>'Manage Donante', 'url'=>array('admin')),
);
?>

<h1>Update Donante <?php echo $model->rut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>