<?php
/* @var $this DonacionsangreController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Donación de Sangre',
);

$this->menu=array(
	array('label'=>'Gestionar Donaciones de Sangre','url'=>array('admin')),
);
?>

<h1>Donación de Sangre</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>