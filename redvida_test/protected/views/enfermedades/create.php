<?php
/* @var $this EnfermedadesController */
/* @var $model Enfermedades */

$this->breadcrumbs=array(
	'Enfermedades'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar Enfermedades', 'url'=>array('index')),
	array('label'=>'Administrar Enfermedades', 'url'=>array('admin')),
);
?>

<h1>Registrar Enfermedades</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>