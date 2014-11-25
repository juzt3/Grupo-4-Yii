<?php
/* @var $this UrgenciasSangreController */
/* @var $model UrgenciasSangre */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Sangres'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Lista Urgencias de Sangre', 'url'=>array('index')),
	array('label'=>'Administrar Urgencias de Sangre', 'url'=>array('admin')),
);
?>

<h1>Registrar Urgencia de Sangre</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>