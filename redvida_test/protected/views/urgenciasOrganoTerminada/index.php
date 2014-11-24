<?php
/* @var $this UrgenciasOrganoTerminadaController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Organo Terminadas',
);

$this->menu=array(
	array('label'=>'Create UrgenciasOrganoTerminada','url'=>array('create')),
	array('label'=>'Manage UrgenciasOrganoTerminada','url'=>array('admin')),
);
?>

<h1>Urgencias Organo Terminadas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>