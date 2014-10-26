<?php
/* @var $this DonantesController */
/* @var $model Donantes */
?>

<?php
$this->breadcrumbs=array(
	'Donantes'=>array('index'),
	$model->rut,
);

$this->menu=array(
	array('label'=>'Lista de Donantes', 'url'=>array('index')),
	array('label'=>'Registrar Donantes', 'url'=>array('create')),
	array('label'=>'Modificar Donantes', 'url'=>array('update', 'id'=>$model->rut)),
	array('label'=>'Deshabilitar Donantes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rut),'confirm'=>'¿Esta seguro de deshabilitar al donante?')),
	array('label'=>'Administrar Donantes', 'url'=>array('admin')),
	array('label'=>'Ver Enfermedades', 'url'=>array('historialenfermedades/admin', 'id'=>$model->rut)),
	array('label'=>'Asignar Enfermedad', 'url'=>array('historialenfermedades/create', 'id'=>$model->rut)),
);
?>

<h1>Donante: Rut <?php echo $model->rut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
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