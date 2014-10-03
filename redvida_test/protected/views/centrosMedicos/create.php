<?php
/* @var $this CentrosMedicosController */
/* @var $model CentrosMedicos */

$this->breadcrumbs=array(
	'Centros Medicos'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Visualizar Centros Medicos', 'url'=>array('index')),
	array('label'=>'Administrar Centros Medicos', 'url'=>array('admin')),
);
?>

<h1>Registrar Centros Medicos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>