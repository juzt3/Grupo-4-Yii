<?php
/* @var $this DonacionmedulaController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Donacionmedulas',
);

$this->menu=array(
	array('label'=>'Create Donacionmedula','url'=>array('create')),
	array('label'=>'Manage Donacionmedula','url'=>array('admin')),
);
?>

<h1>Donacionmedulas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>