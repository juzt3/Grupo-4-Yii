<?php
/* @var $this DTieneOrganosController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Organos Disponibles',
);

$this->menu=array(
	array('label'=>'Administrar Organos Disponibles','url'=>array('admin')),
);
?>

<h1>Organos Disponibles</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>