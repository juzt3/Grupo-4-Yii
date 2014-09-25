<?php
/* @var $this CentrosMedicosController */
/* @var $model CentrosMedicos */

$this->breadcrumbs=array(
	'Centros Medicoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CentrosMedicos', 'url'=>array('index')),
	array('label'=>'Manage CentrosMedicos', 'url'=>array('admin')),
);
?>

<h1>Create CentrosMedicos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>