<?php
/* @var $this DonacionmedulaController */
/* @var $model Donacionmedula */
?>

<?php
$this->breadcrumbs=array(
	'Donacion de Medula'=>array('index'),
	$model->id_donacionmedula,
);

$this->menu=array(
	array('label'=>'Mostrar Donaciones de Medula', 'url'=>array('index')),
	array('label'=>'Modificar Donación de Medula', 'url'=>array('update', 'id'=>$model->id_donacionmedula)),
	array('label'=>'Borrar Donación de Medula', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_donacionmedula),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar Donaciones de Medula', 'url'=>array('admin')),
);
?>

<h1>Mostrar Donación de Medula #<?php echo $model->id_donacionmedula; ?></h1>

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
		'usada',
	),
)); ?>