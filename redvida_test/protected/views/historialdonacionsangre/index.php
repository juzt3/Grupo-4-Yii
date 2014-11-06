<?php
/* @var $this HistorialdonacionsangreController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Historialdonacionsangres',
);

$this->menu=array(
	array('label'=>'Create Historialdonacionsangre','url'=>array('create')),
	array('label'=>'Manage Historialdonacionsangre','url'=>array('admin')),
);
?>

<h1>Historialdonacionsangres</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>