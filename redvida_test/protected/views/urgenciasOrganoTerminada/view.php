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
	array('label'=>'List UrgenciasOrganoTerminada', 'url'=>array('index')),
	array('label'=>'Create UrgenciasOrganoTerminada', 'url'=>array('create')),
	array('label'=>'Update UrgenciasOrganoTerminada', 'url'=>array('update', 'id'=>$model->id_urgencia_organo)),
	array('label'=>'Delete UrgenciasOrganoTerminada', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_urgencia_organo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UrgenciasOrganoTerminada', 'url'=>array('admin')),
);
?>

<h1>View UrgenciasOrganoTerminada #<?php echo $model->id_urgencia_organo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id_urgencia_organo',
		'cod_cm',
		'id_organo',
		'rut',
		'nombre_paciente',
		'apellido_pat',
		'apellido_mat',
		'afiliacion',
		'enfermedad',
		'grado_urgencia',
		'necesidad_transplante',
		'fecha_ini',
		'fecha_fin',
		'motivo',
	),
)); ?>