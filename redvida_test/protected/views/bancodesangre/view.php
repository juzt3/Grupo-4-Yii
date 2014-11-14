<?php
/* @var $this BancodesangreController */
/* @var $model Bancodesangre */
?>

<?php
$this->breadcrumbs=array(
	'Bancodesangres'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Bancodesangre', 'url'=>array('index')),
	array('label'=>'Update Bancodesangre', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Bancodesangre', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bancodesangre', 'url'=>array('admin')),
);
?>

<h1>View Bancodesangre #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'tipo_sangre',
		'cantidad',
	),
)); ?>