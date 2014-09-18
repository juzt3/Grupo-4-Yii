<?php
/* @var $this HistorialenfermedadesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Historialenfermedades',
);

$this->menu=array(
	array('label'=>'Create Historialenfermedades', 'url'=>array('create')),
	array('label'=>'Manage Historialenfermedades', 'url'=>array('admin')),
);
?>

<h1>Historialenfermedades</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
