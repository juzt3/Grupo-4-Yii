<?php
/* @var $this CentrosmedicosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Centros Medicos',
);

$this->menu=array(
	array('label'=>'Registrar Centro Medico', 'url'=>array('create')),
	array('label'=>'Administrar Centros Medicos', 'url'=>array('admin')),
);
?>

<h1>Centros Medicos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
