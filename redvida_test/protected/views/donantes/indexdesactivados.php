<?php
/* @var $this DonantesController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Donantes',
);

$this->menu=array(
	array('label'=>'Donantes Muertos','url'=>array('Indexmuertos')),
);
?>

<h1>Donantes Desactivados</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>