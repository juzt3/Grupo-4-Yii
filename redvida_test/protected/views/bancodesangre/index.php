<?php
/* @var $this BancodesangreController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Banco de Sangre',
);

$this->menu=array(
	array('label'=>'Gestionar Donaciones de Sangre','url'=>array('donacionsangre/admin')),
);
?>

<h1>Banco de Sangre</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>