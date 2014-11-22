<?php
/* @var $this UrgenciasSangreController */
/* @var $model UrgenciasSangre */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Sangres'=>array('index'),
	$model->id_urgencia_sangre,
);

$this->menu=array(
	array('label'=>'List UrgenciasSangre', 'url'=>array('index')),
	array('label'=>'Create UrgenciasSangre', 'url'=>array('create')),
	array('label'=>'Update UrgenciasSangre', 'url'=>array('update', 'id'=>$model->id_urgencia_sangre)),
	array('label'=>'Delete UrgenciasSangre', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_urgencia_sangre),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UrgenciasSangre', 'url'=>array('admin')),
);
?>

<h1>View UrgenciasSangre #<?php echo $model->id_urgencia_sangre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id_urgencia_sangre',
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