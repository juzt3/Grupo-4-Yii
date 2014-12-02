<?php
/* @var $this DTieneOrganosController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Dtiene Organoses',
);

$this->menu=array(
	array('label'=>'Create DTieneOrganos','url'=>array('create')),
	array('label'=>'Manage DTieneOrganos','url'=>array('admin')),
);
?>

<h1>Dtiene Organoses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>