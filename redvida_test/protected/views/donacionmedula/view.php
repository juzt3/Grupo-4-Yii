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
	array('label'=>'Mostrar Donaciones de Medula', 'url'=>array('index')),
	array('label'=>'Registrar Donación de Medula', 'url'=>array('create')),
	array('label'=>'Modificar Donación de Medula', 'url'=>array('update', 'id'=>$model->id_donacionmedula)),
	array('label'=>'Eliminar Donación de Medula', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_donacionmedula),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar Donaciones de Medula', 'url'=>array('admin')),
);
?>

<h1>Ver Donación de medula #<?php echo $model->id_donacionmedula; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id_donacionmedula',
		'cantidad_medula',
		'd_medula_observaciones',
	),
)); ?>