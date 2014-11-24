<?php
/* @var $this UrgenciasSangreTerminadaController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Sangre Terminadas',
);

$this->menu=array(
	array('label'=>'Create UrgenciasSangreTerminada','url'=>array('create')),
	array('label'=>'Manage UrgenciasSangreTerminada','url'=>array('admin')),
);
?>

<h1>Urgencias Sangre Terminadas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>