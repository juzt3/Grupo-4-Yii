<?php
/* @var $this DonacionsangreController */
/* @var $model Donacionsangre */
?>

<?php
$this->breadcrumbs=array(
	'Donación de Sangre'=>array('index'),
	$model->id_donacionsangre,
);

$this->menu=array(
	array('label'=>'Mostrar Donaciones de Sangre', 'url'=>array('index')),
	array('label'=>'Modificar Donación de Sangre', 'url'=>array('update', 'id'=>$model->id_donacionsangre)),
	array('label'=>'Borrar Donación de Sangre', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_donacionsangre),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar Donación de Sangre', 'url'=>array('admin')),
);
?>

<h1>Mostrar Donación de Sangre #<?php echo $model->id_donacionsangre; ?></h1>

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
		'usada',
	),
)); ?>