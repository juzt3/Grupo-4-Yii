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
	array('label'=>'List UrgenciasMedulaTerminada', 'url'=>array('index')),
	array('label'=>'Create UrgenciasMedulaTerminada', 'url'=>array('create')),
	array('label'=>'Update UrgenciasMedulaTerminada', 'url'=>array('update', 'id'=>$model->id_urgencia_medula_terminada)),
	array('label'=>'Delete UrgenciasMedulaTerminada', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_urgencia_medula_terminada),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UrgenciasMedulaTerminada', 'url'=>array('admin')),
);
?>

<h1>View UrgenciasMedulaTerminada #<?php echo $model->id_urgencia_medula_terminada; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id_urgencia_medula_terminada',
		'cod_cm',
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
	),
)); ?>