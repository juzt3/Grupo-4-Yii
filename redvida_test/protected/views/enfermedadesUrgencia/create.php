<?php
/* @var $this EnfermedadesUrgenciaController */
/* @var $model EnfermedadesUrgencia */
?>

<?php
$this->breadcrumbs=array(
	'Enfermedades Urgencias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EnfermedadesUrgencia', 'url'=>array('index')),
	array('label'=>'Manage EnfermedadesUrgencia', 'url'=>array('admin')),
);
?>

<h1>Create EnfermedadesUrgencia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>