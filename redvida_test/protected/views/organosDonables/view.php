<?php
/* @var $this OrganosDonablesController */
/* @var $model OrganosDonables */
?>

<?php
$this->breadcrumbs=array(
	'Organos Donables'=>array('index'),
	$model->id_organo,
);

$this->menu=array(
	array('label'=>'Listar Organos Donables', 'url'=>array('index')),
	array('label'=>'Registrar Organos Donables', 'url'=>array('create')),
	array('label'=>'Modificar Organos Donables', 'url'=>array('update', 'id'=>$model->id_organo)),
	array('label'=>'Borrar Organos Donables', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_organo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Organos Donables', 'url'=>array('admin')),
);
?>

<h1>Ver Organo Donable #<?php echo $model->id_organo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id_organo',
		'nombre_organo',
		'horas_duracion',
	),
)); ?>