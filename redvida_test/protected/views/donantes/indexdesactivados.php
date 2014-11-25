<?php
/* @var $this DonantesController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Donantes',
);

$this->menu=array(
	array('label'=>'Registrar Donantes','url'=>array('create')),
	array('label'=>'Administrar Donantes','url'=>array('admin')),
	array('label'=>'Donantes Muertos','url'=>array('Indexmuertos')),
);
?>

<h1>Donantes Desactivados</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>