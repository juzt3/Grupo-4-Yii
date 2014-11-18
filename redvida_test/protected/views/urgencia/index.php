<?php
/* @var $this UrgenciaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Urgencias',
);

$this->menu=array(
	array('label'=>'Crear Urgencia', 'url'=>array('create')),
	array('label'=>'Gestion de Urgencias', 'url'=>array('admin')),
	array('label'=>'Urgencias Terminadas', 'url'=>array('urgenciasterminadas/admin')),
);
?>

<h1>Urgencias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
