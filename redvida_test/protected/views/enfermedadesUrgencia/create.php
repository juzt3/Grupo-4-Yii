<?php
/* @var $this EnfermedadesUrgenciaController */
/* @var $model EnfermedadesUrgencia */
?>

<?php
$this->breadcrumbs=array(
	'Enfermedades de Urgencias'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar Enfermedades de Urgencia', 'url'=>array('index')),
	array('label'=>'Admimnistrar Enfermedades de Urgencia', 'url'=>array('admin')),
);
?>

<h1>Registrar Enfermedades de Urgencia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>