<?php
/* @var $this UrgenciasMedulaController */
/* @var $model UrgenciasMedula */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Medulas'=>array('index'),
	$model->id_urgencia_medula,
);

$this->menu=array(
	array('label'=>'Lista de Urgencias de Medula', 'url'=>array('index')),
	array('label'=>'Registrar Urgencia de Medula', 'url'=>array('create')),
	array('label'=>'Modificar Urgencia de Medula', 'url'=>array('update', 'id'=>$model->id_urgencia_medula)),
	array('label'=>'Finalizar Urgencia de Medula', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_urgencia_medula),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Urgencias de Medula', 'url'=>array('admin')),
);
?>

<h1>Ver Urgencia de Medula #<?php echo $model->id_urgencia_medula; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'codCm.nombre_cm',
		'rut',
		'nombre_paciente',
		'apellido_pat',
		'apellido_mat',
		'afiliacion',
		'grado_urgencia',
		'tipo_transplante',
		'fecha_ini',
		'fecha_fin',
	),
)); ?>