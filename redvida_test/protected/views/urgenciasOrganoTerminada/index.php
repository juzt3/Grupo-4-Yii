<?php
/* @var $this UrgenciasOrganoTerminadaController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Organo Terminadas',
);

$this->menu=array(
	array('label'=>'Administrar Urgencias de Organo Terminadas','url'=>array('admin')),
);
?>

<h1>Urgencias Organo Terminadas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>