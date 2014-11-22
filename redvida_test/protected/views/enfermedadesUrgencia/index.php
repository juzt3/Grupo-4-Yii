<?php
/* @var $this EnfermedadesUrgenciaController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Enfermedades Urgencias',
);

$this->menu=array(
	array('label'=>'Create EnfermedadesUrgencia','url'=>array('create')),
	array('label'=>'Manage EnfermedadesUrgencia','url'=>array('admin')),
);
?>

<h1>Enfermedades Urgencias</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>