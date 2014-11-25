<?php
/* @var $this DonacionsangreController */
/* @var $model Donacionsangre */
?>

<?php
$this->breadcrumbs=array(
	'Donacionsangres'=>array('index'),
	$model->id_donacionsangre=>array('view','id'=>$model->id_donacionsangre),
	'Update',
);

$this->menu=array(
	array('label'=>'List Donacionsangre', 'url'=>array('index')),
	array('label'=>'Create Donacionsangre', 'url'=>array('create')),
	array('label'=>'View Donacionsangre', 'url'=>array('view', 'id'=>$model->id_donacionsangre)),
	array('label'=>'Manage Donacionsangre', 'url'=>array('admin')),
);
?>

    <h1>Update Donacionsangre <?php echo $model->id_donacionsangre; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>