<?php
/* @var $this DTieneOrganosController */
/* @var $model DTieneOrganos */
?>

<?php
$this->breadcrumbs=array(
	'Dtiene Organoses'=>array('index'),
	$model->id_tiene_organos,
);

$this->menu=array(
	array('label'=>'List DTieneOrganos', 'url'=>array('index')),
	array('label'=>'Create DTieneOrganos', 'url'=>array('create')),
	array('label'=>'Update DTieneOrganos', 'url'=>array('update', 'id'=>$model->id_tiene_organos)),
	array('label'=>'Delete DTieneOrganos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tiene_organos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DTieneOrganos', 'url'=>array('admin')),
);
?>

<h1>View DTieneOrganos #<?php echo $model->id_tiene_organos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id_tiene_organos',
		'rut',
		'id_organo',
		'transplantado',
	),
)); ?>