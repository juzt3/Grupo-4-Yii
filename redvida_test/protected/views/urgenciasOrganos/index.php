<?php
/* @var $this UrgenciasOrganosController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Organoses',
);

$this->menu=array(
	array('label'=>'Create UrgenciasOrganos','url'=>array('create')),
	array('label'=>'Manage UrgenciasOrganos','url'=>array('admin')),
);
?>

<h1>Urgencias Organoses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>