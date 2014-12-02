<?php
/* @var $this OrganosDonablesController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Organos Donables',
);

$this->menu=array(
	array('label'=>'Create OrganosDonables','url'=>array('create')),
	array('label'=>'Manage OrganosDonables','url'=>array('admin')),
);
?>

<h1>Organos Donables</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>