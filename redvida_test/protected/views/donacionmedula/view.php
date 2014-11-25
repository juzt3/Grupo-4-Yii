<?php
/* @var $this DonacionmedulaController */
/* @var $model Donacionmedula */
?>

<?php
$this->breadcrumbs=array(
	'Donacionmedulas'=>array('index'),
	$model->id_donacionmedula,
);

$this->menu=array(
	array('label'=>'List Donacionmedula', 'url'=>array('index')),
	array('label'=>'Create Donacionmedula', 'url'=>array('create')),
	array('label'=>'Update Donacionmedula', 'url'=>array('update', 'id'=>$model->id_donacionmedula)),
	array('label'=>'Delete Donacionmedula', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_donacionmedula),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Donacionmedula', 'url'=>array('admin')),
);
?>

<h1>View Donacionmedula #<?php echo $model->id_donacionmedula; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id_donacionmedula',
		'rut',
		'cantidad_medula',
		'd_medula_observaciones',
		'fecha_donacionmedula',
		'fecha_expiracionmedula',
	),
)); ?>