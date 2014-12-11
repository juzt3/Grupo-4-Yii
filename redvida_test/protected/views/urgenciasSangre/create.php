<?php
/* @var $this UrgenciasSangreController */
/* @var $model UrgenciasSangre */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias de Sangre'=>array('index'),
	'Registrar Urgencias de Sangre',
);

$this->menu=array(
	array('label'=>'Lista Urgencias de Sangre', 'url'=>array('index')),
	array('label'=>'Gestionar Urgencias de Sangre', 'url'=>array('admin')),
);
?>

<h1>Registrar Urgencia de Sangre</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>