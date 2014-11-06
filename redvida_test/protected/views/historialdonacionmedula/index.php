<?php
/* @var $this HistorialdonacionmedulaController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Historialdonacionmedulas',
);

$this->menu=array(
	array('label'=>'Create Historialdonacionmedula','url'=>array('create')),
	array('label'=>'Manage Historialdonacionmedula','url'=>array('admin')),
);
?>

<h1>Historialdonacionmedulas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>