<?php
/* @var $this UrgenciasSangreController */
/* @var $model UrgenciasSangre */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias de Sangre'=>array('index'),
	$model->id_urgencia_sangre,
);

$this->menu=array(
	array('label'=>'Lista de Urgencias de Sangre', 'url'=>array('index')),
	array('label'=>'Registrar Urgencia de Sangre', 'url'=>array('create')),
	array('label'=>'Modificar Urgencia de Sangre', 'url'=>array('update', 'id'=>$model->id_urgencia_sangre)),
	array('label'=>'Finalizar Urgencia de Sangre', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_urgencia_sangre),'confirm'=>'¿Esta seguro que quiere dar por terminada esta urgencia?')),
	array('label'=>'Administrar Urgencias deSangre', 'url'=>array('admin')),
);
?>

<h1>Ver Urgencia de Sangre #<?php echo $model->id_urgencia_sangre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		
		'rut',
		'nombre_paciente',
		'apellido_pat',
		'apellido_mat',
		'afiliacion',
		'grado_urgencia',
		'tipo_sangre',
		'cantidad_sangre',
		'fecha_ini',
		'codCm.nombre_cm',
	),
)); ?>