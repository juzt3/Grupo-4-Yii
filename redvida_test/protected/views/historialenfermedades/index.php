<?php
/* @var $this HistorialenfermedadesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Historialenfermedades',
);

$this->menu=array(
	//array('label'=>'Crear Historial de Enfermedades', 'url'=>array('create')),
	array('label'=>'Administrar Historial de Enfermedades', 'url'=>array('admin')),
);
?>

<h1>Historial de Enfermedades</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
