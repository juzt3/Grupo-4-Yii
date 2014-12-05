<?php
/* @var $this EnfermedadesUrgenciaController */
/* @var $model EnfermedadesUrgencia */
?>

<?php
$this->breadcrumbs=array(
	'Enfermedades de Urgencias'=>array('index'),
	$model->id_enfermedad_urgencia,
);

$this->menu=array(
	array('label'=>'Listar Enfermedades de Urgencia', 'url'=>array('index')),
	array('label'=>'Registrar Enfermedades de Urgencia', 'url'=>array('create')),
	array('label'=>'Modificar Enfermedad de Urgencia', 'url'=>array('update', 'id'=>$model->id_enfermedad_urgencia)),
	array('label'=>'Borrar Enfermedad de Urgencia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_enfermedad_urgencia),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Enfermedades de Urgencia', 'url'=>array('admin')),
);
?>

<h1>Ver Enfermedad de Urgencia #<?php echo $model->id_enfermedad_urgencia; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id_enfermedad_urgencia',
		'nombre',
		'descripcion',
	),
)); ?>