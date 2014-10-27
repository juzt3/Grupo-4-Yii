<?php
/* @var $this UrgenciaController */
/* @var $model Urgencia */

$this->breadcrumbs=array(
	'Urgencias'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Lista de Urgencias', 'url'=>array('index')),
	array('label'=>'Gestion de Urgencias', 'url'=>array('admin')),
);
?>

<h1>Crear Urgencia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>