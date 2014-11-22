<?php
/* @var $this EnfermedadesUrgenciaController */
/* @var $model EnfermedadesUrgencia */
?>

<?php
$this->breadcrumbs=array(
	'Enfermedades Urgencias'=>array('index'),
	$model->id_enfermedad_urgencia,
);

$this->menu=array(
	array('label'=>'List EnfermedadesUrgencia', 'url'=>array('index')),
	array('label'=>'Create EnfermedadesUrgencia', 'url'=>array('create')),
	array('label'=>'Update EnfermedadesUrgencia', 'url'=>array('update', 'id'=>$model->id_enfermedad_urgencia)),
	array('label'=>'Delete EnfermedadesUrgencia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_enfermedad_urgencia),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EnfermedadesUrgencia', 'url'=>array('admin')),
);
?>

<h1>View EnfermedadesUrgencia #<?php echo $model->id_enfermedad_urgencia; ?></h1>

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