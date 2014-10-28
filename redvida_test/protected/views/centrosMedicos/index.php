<?php
/* @var $this CentrosmedicosController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Centros Medicos',
);

$this->menu=array(
	array('label'=>'Registrar Centro Medico','url'=>array('create')),
	array('label'=>'Administrar Centros Medicos','url'=>array('admin')),
);
?>

<h1>Centros Medicos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>