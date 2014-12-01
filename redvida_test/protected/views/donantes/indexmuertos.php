<?php
/* @var $this DonantesController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Donantes',
);

$this->menu=array(
	array('label'=>'Donantes Desactivados','url'=>array('Indexdesactivados')),
	array('label'=>'Administrar Donantes Muertos','url'=>array('Adminmuertos')),
);
?>

<h1>Donantes Muertos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>