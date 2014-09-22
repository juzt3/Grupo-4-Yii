<?php
/* @var $this EnfermedadesController */
/* @var $model Enfermedades */

$this->breadcrumbs=array(
	'Enfermedades'=>array('index'),
	$model->idenfermedad,
);

$this->menu=array(
	array('label'=>'List Enfermedades', 'url'=>array('index')),
	array('label'=>'Create Enfermedades', 'url'=>array('create')),
	array('label'=>'Update Enfermedades', 'url'=>array('update', 'id'=>$model->idenfermedad)),
	array('label'=>'Delete Enfermedades', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idenfermedad),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Enfermedades', 'url'=>array('admin')),
);
?>

<h1>View Enfermedades #<?php echo $model->idenfermedad; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idenfermedad',
		'nombre',
		'descripcion',
	),
)); ?>
