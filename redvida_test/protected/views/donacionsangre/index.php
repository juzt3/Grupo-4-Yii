<?php
/* @var $this DonacionsangreController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Donacionsangres',
);

$this->menu=array(
	array('label'=>'Create Donacionsangre','url'=>array('create')),
	array('label'=>'Manage Donacionsangre','url'=>array('admin')),
);
?>

<h1>Donacionsangres</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>