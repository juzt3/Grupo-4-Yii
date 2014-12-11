<?php
/* @var $this DTieneOrganosController */
/* @var $model DTieneOrganos */
?>

<?php
$this->breadcrumbs=array(
	'Organos Disponibles'=>array('index'),
	$model->id_tiene_organos,
);

$this->menu=array(
	array('label'=>'Mostrar Organos Disponibles', 'url'=>array('index')),
	array('label'=>'Administrar Organos Disponibles', 'url'=>array('admin')),
);
?>

<h1>Ver Organo Disponible #<?php echo $model->id_tiene_organos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'rut',
		'id_organo',
		'idOrgano.nombre_organo',
		'transplantado',
	),
)); ?>