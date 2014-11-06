<?php
/* @var $this HistorialdonacionsangreController */
/* @var $model Historialdonacionsangre */
?>

<?php
$this->breadcrumbs=array(
	'Historialdonacionsangres'=>array('index'),
	$model->id_historialsangre,
);

$this->menu=array(
	array('label'=>'List Historialdonacionsangre', 'url'=>array('index')),
	array('label'=>'Create Historialdonacionsangre', 'url'=>array('create')),
	array('label'=>'Update Historialdonacionsangre', 'url'=>array('update', 'id'=>$model->id_historialsangre)),
	array('label'=>'Delete Historialdonacionsangre', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_historialsangre),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Historialdonacionsangre', 'url'=>array('admin')),
);
?>

<h1>View Historialdonacionsangre #<?php echo $model->id_historialsangre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id_historialsangre',
		'id_donacionsangre',
		'rut',
		'fecha_donacionsangre',
	),
)); ?>