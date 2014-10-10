<?php
/* @var $this HistorialenfermedadesController */
/* @var $model Historialenfermedades */

$this->breadcrumbs=array(
	'Historialenfermedades'=>array('index'),
	$model->idhistorial,
);

$this->menu=array(
	array('label'=>'Listar Historial de Enfermedades', 'url'=>array('index')),
	//array('label'=>'Crear Historial de Enfermedades', 'url'=>array('create')),
	array('label'=>'Administrar Historial de Enfermedades', 'url'=>array('update', 'id'=>$model->idhistorial)),
	array('label'=>'Borrar Historial de Enfermedades', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idhistorial),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Historial de Enfermedades', 'url'=>array('admin')),
);
?>

<h1>Ver Historial de Enfermedades #<?php echo $model->idhistorial; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'idhistorial',
		'rut',
		'idenfermedad',
		'fecha',
	),
)); ?>
