<?php
/* @var $this UrgenciaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Urgencias',
);

$this->menu=array(
	array('label'=>'Create Urgencia', 'url'=>array('create')),
	array('label'=>'Manage Urgencia', 'url'=>array('admin')),
);
?>

<h1>Urgencias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
