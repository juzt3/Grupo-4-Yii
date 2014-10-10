<?php
/* @var $this DonantesController */
/* @var $model Donantes */

$this->breadcrumbs=array(
	'Donantes'=>array('index'),
	$model->rut=>array('view','id'=>$model->rut),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Donantes', 'url'=>array('index')),
	array('label'=>'Crear Donantes', 'url'=>array('create')),
	array('label'=>'Ver Donante', 'url'=>array('view', 'id'=>$model->rut)),
	array('label'=>'Administrar Donantes', 'url'=>array('admin')),
);
?>

<h1>Actualizar Donante <?php echo $model->rut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>