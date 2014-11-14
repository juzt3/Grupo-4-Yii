<?php
/* @var $this UrgenciasterminadasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Urgenciasterminadases',
);

$this->menu=array(
	array('label'=>'Create Urgenciasterminadas', 'url'=>array('create')),
	array('label'=>'Manage Urgenciasterminadas', 'url'=>array('admin')),
);
?>

<h1>Urgenciasterminadases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
