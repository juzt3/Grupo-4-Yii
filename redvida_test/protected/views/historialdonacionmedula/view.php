<?php
/* @var $this HistorialdonacionmedulaController */
/* @var $model Historialdonacionmedula */
?>

<?php
$this->breadcrumbs=array(
	'Historialdonacionmedulas'=>array('index'),
	$model->id_historialmedula,
);

$this->menu=array(
	array('label'=>'List Historialdonacionmedula', 'url'=>array('index')),
	array('label'=>'Create Historialdonacionmedula', 'url'=>array('create')),
	array('label'=>'Update Historialdonacionmedula', 'url'=>array('update', 'id'=>$model->id_historialmedula)),
	array('label'=>'Delete Historialdonacionmedula', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_historialmedula),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Historialdonacionmedula', 'url'=>array('admin')),
);
?>

<h1>View Historialdonacionmedula #<?php echo $model->id_historialmedula; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id_historialmedula',
		'id_donacionmedula',
		'rut',
		'fecha_donacionmedula',
	),
)); ?>