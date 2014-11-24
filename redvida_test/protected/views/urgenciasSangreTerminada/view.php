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
	array('label'=>'List UrgenciasSangreTerminada', 'url'=>array('index')),
	array('label'=>'Create UrgenciasSangreTerminada', 'url'=>array('create')),
	array('label'=>'Update UrgenciasSangreTerminada', 'url'=>array('update', 'id'=>$model->id_urgencia_sangre_terminada)),
	array('label'=>'Delete UrgenciasSangreTerminada', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_urgencia_sangre_terminada),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UrgenciasSangreTerminada', 'url'=>array('admin')),
);
?>

<h1>View UrgenciasSangreTerminada #<?php echo $model->id_urgencia_sangre_terminada; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id_urgencia_sangre_terminada',
		'cod_cm',
		'rut',
		'nombre_paciente',
		'apellido_pat',
		'apellido_mat',
		'afiliacion',
		'enfermedad',
		'grado_urgencia',
		'tipo_sangre',
		'fecha_ini',
		'fecha_fin',
	),
)); ?>