<?php
/* @var $this CentrosmedicosController */
/* @var $model Centrosmedicos */

$this->breadcrumbs=array(
	'Centros Medicos'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Mostrar Centros Medicos', 'url'=>array('index')),
	array('label'=>'Administrar Centros Medicos', 'url'=>array('admin')),
);
?>

<h1>Registrar Centro Medico</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>