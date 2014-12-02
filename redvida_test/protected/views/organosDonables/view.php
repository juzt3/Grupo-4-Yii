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
	array('label'=>'List OrganosDonables', 'url'=>array('index')),
	array('label'=>'Create OrganosDonables', 'url'=>array('create')),
	array('label'=>'Update OrganosDonables', 'url'=>array('update', 'id'=>$model->id_organo)),
	array('label'=>'Delete OrganosDonables', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_organo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrganosDonables', 'url'=>array('admin')),
);
?>

<h1>View OrganosDonables #<?php echo $model->id_organo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id_organo',
		'nombre_organo',
	),
)); ?>