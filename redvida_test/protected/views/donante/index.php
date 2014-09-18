<?php
/* @var $this DonanteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Donantes',
);

$this->menu=array(
	array('label'=>'Create Donante', 'url'=>array('create')),
	array('label'=>'Manage Donante', 'url'=>array('admin')),
);
?>

<h1>Donantes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
