<?php
/* @var $this DonacionsangreController */
/* @var $model Donacionsangre */
?>

<?php
$this->breadcrumbs=array(
	'Donación de Sangre'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Mostrar Donaciones de Sangre', 'url'=>array('index')),
	array('label'=>'Gestionar Donaciones de Sangre', 'url'=>array('admin')),
);
?>

<h1>Registrar Donación de Sangre</h1>

<?php $this->renderPartial('_form', array('donacion'=>$donacion, 'historial'=>$historial)); ?>