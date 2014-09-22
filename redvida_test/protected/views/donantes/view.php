<?php
/* @var $this DonantesController */
/* @var $model Donantes */

$this->breadcrumbs=array(
	'Donantes'=>array('index'),
	$model->rut,
);

$this->menu=array(
	array('label'=>'List Donantes', 'url'=>array('index')),
	array('label'=>'Create Donantes', 'url'=>array('create')),
	array('label'=>'Update Donantes', 'url'=>array('update', 'id'=>$model->rut)),
	array('label'=>'Delete Donantes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Donantes', 'url'=>array('admin')),
);
?>

<h1>View Donantes #<?php echo $model->rut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nombres',
		'apellidos',
		'rut',
		'direccion',
		'comuna',
		'tiposangre',
		'alergias',
		'centromedico',
		'donanteorganos',
		'email',
		'telefono',
		'celular',
		'habilitado',
	),
)); ?>
