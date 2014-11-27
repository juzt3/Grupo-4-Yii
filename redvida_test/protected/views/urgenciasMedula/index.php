<?php
/* @var $this UrgenciasMedulaController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Medulas',
);

$this->menu=array(
	array('label'=>'Registrar Urgencia de Medula','url'=>array('create')),
	array('label'=>'Administrar Urgencias de Medula','url'=>array('admin')),
	array('label'=>'Urgencias de Medula Terminadas','url'=>array('urgenciasMedulaTerminada/admin')),
);
?>

<h1>Urgencias Medulas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>