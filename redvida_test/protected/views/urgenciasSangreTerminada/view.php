<?php
/* @var $this UrgenciasSangreTerminadaController */
/* @var $model UrgenciasSangreTerminada */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Sangre Terminadas'=>array('index'),
	$model->id_urgencia_sangre_terminada,
);

$this->menu=array(
	array('label'=>'Lista de Urgencias de Sangre Terminada', 'url'=>array('index')),
	array('label'=>'Administrar Urgencias de Sangre Terminada', 'url'=>array('admin')),
);
?>

<h1>Ver Urgencia de Sangre Terminada #<?php echo $model->id_urgencia_sangre_terminada; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id_urgencia_sangre_terminada',
		'codCm.nombre_cm',
		'rut',
		'nombre_paciente',
		'apellido_pat',
		'apellido_mat',
		'afiliacion',
		'grado_urgencia',
		'tipo_sangre',
		'cantidad_sangre',
		'fecha_ini',
		'fecha_fin',
		'motivo',
	),
)); ?>