<?php
/* @var $this DonacionsangreController */
/* @var $model Donacionsangre */
?>

<?php
$this->breadcrumbs=array(
	'Donacion de Sangre'=>array('index'),
	'Registrar Donación',
);

$this->menu=array(
	array('label'=>'Mostrar Donaciónes de Sangre', 'url'=>array('index')),
	array('label'=>'Gestionar Donaciónes de Sangre', 'url'=>array('admin')),
);
?>

<h1>Registrar Donación de Sangre</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>