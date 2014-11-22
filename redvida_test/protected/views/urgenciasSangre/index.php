<?php
/* @var $this UrgenciasSangreController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Sangres',
);

$this->menu=array(
	array('label'=>'Create UrgenciasSangre','url'=>array('create')),
	array('label'=>'Manage UrgenciasSangre','url'=>array('admin')),
);
?>

<h1>Urgencias Sangres</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>