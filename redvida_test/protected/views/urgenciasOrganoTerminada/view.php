<?php
/* @var $this UrgenciasOrganoTerminadaController */
/* @var $model UrgenciasOrganoTerminada */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Organo Terminadas'=>array('index'),
	$model->id_urgencia_organo,
);

$this->menu=array(
	array('label'=>'Lista de  Urgencias de Organo Terminadas', 'url'=>array('index')),
	array('label'=>'Administrar Urgencia de Organo Terminada', 'url'=>array('admin')),
);
?>

<h1>Ver Urgencia de Organo Terminada #<?php echo $model->id_urgencia_organo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id_urgencia_organo',
		'codCm.nombre_cm',
		'idOrgano.nombre_organo',
		'rut',
		'nombre_paciente',
		'apellido_pat',
		'apellido_mat',
		'afiliacion',
		'grado_urgencia',
		'fecha_ini',
		'fecha_fin',
		'motivo',
	),
)); ?>