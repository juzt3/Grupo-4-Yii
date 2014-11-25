<?php
/* @var $this DonacionsangreController */
/* @var $model Donacionsangre */
?>

<?php
$this->breadcrumbs=array(
	'Donacionsangres'=>array('index'),
	$model->id_donacionsangre,
);

$this->menu=array(
	array('label'=>'List Donacionsangre', 'url'=>array('index')),
	array('label'=>'Create Donacionsangre', 'url'=>array('create')),
	array('label'=>'Update Donacionsangre', 'url'=>array('update', 'id'=>$model->id_donacionsangre)),
	array('label'=>'Delete Donacionsangre', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_donacionsangre),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Donacionsangre', 'url'=>array('admin')),
);
?>

<h1>View Donacionsangre #<?php echo $model->id_donacionsangre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id_donacionsangre',
		'rut',
		'cantidad_sangre',
		'dsangre_observaciones',
		'tipo_sangre',
		'fecha_donacionsangre',
		'fecha_expiracion',
	),
)); ?>