<?php
/* @var $this UrgenciasOrganosController */
/* @var $model UrgenciasOrganos */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Organos'=>array('index'),
	$model->id_urgencia_organo,
);

$this->menu=array(
	array('label'=>'Lista de Urgencias de Organos', 'url'=>array('index')),
	array('label'=>'Registrar Urgencia de Organos', 'url'=>array('create')),
	array('label'=>'Modificar Urgencia de Organos', 'url'=>array('update', 'id'=>$model->id_urgencia_organo)),
	array('label'=>'Finalizar Urgencia de Organos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_urgencia_organo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Urgencias de Organos', 'url'=>array('admin')),
);
?>

<h1>Ver Urgencia de Organos #<?php echo $model->id_urgencia_organo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id_urgencia_organo',
		'cod_cm',
		'id_organo',
		'id_enfermedad_urgencia',
		'rut',
		'nombre_paciente',
		'apellido_pat',
		'apellido_mat',
		'afiliacion',
		'grado_urgencia',
		'fecha_ini',
		'fecha_fin',
	),
)); ?>