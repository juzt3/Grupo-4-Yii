<?php
/* @var $this DonacionmedulaController */
/* @var $model Donacionmedula */
?>

<?php
$this->breadcrumbs=array(
	'Donacionmedulas'=>array('index'),
	$model->id_donacionmedula=>array('view','id'=>$model->id_donacionmedula),
	'Update',
);

$this->menu=array(
	array('label'=>'List Donacionmedula', 'url'=>array('index')),
	array('label'=>'Create Donacionmedula', 'url'=>array('create')),
	array('label'=>'View Donacionmedula', 'url'=>array('view', 'id'=>$model->id_donacionmedula)),
	array('label'=>'Manage Donacionmedula', 'url'=>array('admin')),
);
?>

    <h1>Update Donacionmedula <?php echo $model->id_donacionmedula; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>