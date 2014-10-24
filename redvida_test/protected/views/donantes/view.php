<?php
/* @var $this DonantesController */
/* @var $model Donantes */

$this->breadcrumbs=array(
	'Donantes'=>array('index'),
	$model->rut,
);

$this->menu=array(
	array('label'=>'Listar Donantes', 'url'=>array('index')),
	array('label'=>'Registrar Donante', 'url'=>array('create')),
	array('label'=>'Actualizar Donantes', 'url'=>array('update', 'id'=>$model->rut)),
	array('label'=>'Desactivar Donante', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rut),'confirm'=>'¿Estas seguro de que quieres desactivar a este donante?')),
	array('label'=>'Administrar Donantes', 'url'=>array('admin')),
	array('label'=>'Ver Enfermedades', 'url'=>array('historialenfermedades/admin', 'id'=>$model->rut)),
	array('label'=>'Asignar Enfermedad', 'url'=>array('historialenfermedades/create', 'id'=>$model->rut)),
);
?>

<h1>Ver Donante #<?php echo $model->rut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'rut',
		'nombres',
		'apellidos',
		'fecha_nac',
		'sexo',
		'direccion',
		'comuna',
		'email',
		'telefono',
		'celular',
		'alergias',
		'afiliacion',
		'centromedico',
		'tiposangre',
		'donanteorganos',
		'donantemedula',
		'habilitado',
	),
)); ?>
