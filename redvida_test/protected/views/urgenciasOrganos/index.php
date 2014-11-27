<?php
/* @var $this UrgenciasOrganosController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Organos',
);

$this->menu=array(
	array('label'=>'Registrar Urgencia de Organos','url'=>array('create')),
	array('label'=>'Administrar Urgencias de Organos','url'=>array('admin')),
	array('label'=>'Urgencias de Organos Terminadas','url'=>array('urgenciasOrganoTerminada/admin')),
);
?>

<h1>Urgencias Organos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>