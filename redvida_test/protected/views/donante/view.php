<?php
/* @var $this DonanteController */
/* @var $model Donante */

$this->breadcrumbs=array(
	'Donantes'=>array('index'),
	$model->rut,
);

$this->menu=array(
	array('label'=>'List Donante', 'url'=>array('index')),
	array('label'=>'Create Donante', 'url'=>array('create')),
	array('label'=>'Update Donante', 'url'=>array('update', 'id'=>$model->rut)),
	array('label'=>'Delete Donante', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Donante', 'url'=>array('admin')),
);
?>

<h1>View Donante #<?php echo $model->rut; ?></h1>

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
