<?php
/* @var $this DonantesController */
/* @var $model Donantes */
?>

<?php
$this->breadcrumbs=array(
	'Donantes'=>array('index'),
	$model->rut=>array('view','id'=>$model->rut),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Lista de Donantes', 'url'=>array('index')),
	array('label'=>'Registrar Donantes', 'url'=>array('create')),
	array('label'=>'Ver Donante', 'url'=>array('view', 'id'=>$model->rut)),
	array('label'=>'Administrar Donantes', 'url'=>array('admin')),
);
?>

    <h1>Modificar Donante: Rut <?php echo $model->rut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>