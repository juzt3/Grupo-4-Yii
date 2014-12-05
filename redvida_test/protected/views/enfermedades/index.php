<?php
/* @var $this EnfermedadesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Enfermedades',
);

$this->menu=array(
	array('label'=>'Registrar Enfermedades', 'url'=>array('create')),
	array('label'=>'Administrar Enfermedades', 'url'=>array('admin')),
);
?>

<h1>Enfermedades</h1>

<?php $this->widget('bootstrap.widgets.TbListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
