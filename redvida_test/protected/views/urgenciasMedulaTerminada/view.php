<?php
/* @var $this UrgenciasMedulaTerminadaController */
/* @var $model UrgenciasMedulaTerminada */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Medula Terminadas'=>array('index'),
	$model->id_urgencia_medula_terminada,
);

$this->menu=array(
	array('label'=>'Lista Urgencias de Medula Terminada', 'url'=>array('index')),
	array('label'=>'Manage UrgenciasMedulaTerminada', 'url'=>array('admin')),
);
?>

<h1>Ver Urgencia de Medula Terminada #<?php echo $model->id_urgencia_medula_terminada; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id_urgencia_medula_terminada',
		'codCm.nombre_cm',
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