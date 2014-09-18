<?php
/* @var $this EnfermedadesController */
/* @var $model Enfermedades */

$this->breadcrumbs=array(
	'Enfermedades'=>array('index'),
	$model->idenfermedad=>array('view','id'=>$model->idenfermedad),
	'Update',
);

$this->menu=array(
	array('label'=>'List Enfermedades', 'url'=>array('index')),
	array('label'=>'Create Enfermedades', 'url'=>array('create')),
	array('label'=>'View Enfermedades', 'url'=>array('view', 'id'=>$model->idenfermedad)),
	array('label'=>'Manage Enfermedades', 'url'=>array('admin')),
);
?>

<h1>Update Enfermedades <?php echo $model->idenfermedad; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>