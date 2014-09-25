<?php
/* @var $this CentrosMedicosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Centros Medicoses',
);

$this->menu=array(
	array('label'=>'Create CentrosMedicos', 'url'=>array('create')),
	array('label'=>'Manage CentrosMedicos', 'url'=>array('admin')),
);
?>

<h1>Centros Medicoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
