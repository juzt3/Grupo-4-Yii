<?php
/* @var $this UrgenciasMedulaController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Medulas',
);

$this->menu=array(
	array('label'=>'Create UrgenciasMedula','url'=>array('create')),
	array('label'=>'Manage UrgenciasMedula','url'=>array('admin')),
);
?>

<h1>Urgencias Medulas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>