<?php
/* @var $this EnfermedadesUrgenciaController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Enfermedades de Urgencias',
);

$this->menu=array(
	array('label'=>'Registrar Enfermedades de Urgencia','url'=>array('create')),
	array('label'=>'Administrar Enfermedades de Urgencia','url'=>array('admin')),
);
?>

<h1>Enfermedades de Urgencias</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>