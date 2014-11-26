<?php
/* @var $this DonacionmedulaController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Donación de Medula',
);

$this->menu=array(
	array('label'=>'Gestionar Donaciones de Medula','url'=>array('admin')),
);
?>

<h1>Donación de Medula</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>