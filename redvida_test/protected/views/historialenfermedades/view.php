<?php
/* @var $this HistorialenfermedadesController */
/* @var $model Historialenfermedades */

$this->breadcrumbs=array(
	'Historialenfermedades'=>array('index'),
	$model->idhistorial,
);

$this->menu=array(
	array('label'=>'List Historialenfermedades', 'url'=>array('index')),
	array('label'=>'Create Historialenfermedades', 'url'=>array('create')),
	array('label'=>'Update Historialenfermedades', 'url'=>array('update', 'id'=>$model->idhistorial)),
	array('label'=>'Delete Historialenfermedades', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idhistorial),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Historialenfermedades', 'url'=>array('admin')),
);
?>

<h1>View Historialenfermedades #<?php echo $model->idhistorial; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idhistorial',
		'rut',
		'fecha',
		'idenfermedad',
	),
)); ?>
