<?php
/* @var $this HistorialenfermedadesController */
/* @var $model Historialenfermedades */

$this->breadcrumbs=array(
	'Historial de Enfermedades'=>array('index'),
	$model->idhistorial=>array('view','id'=>$model->idhistorial),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Historial de Enfermedades', 'url'=>array('index')),
	//array('label'=>'Crear Historial de Enfermedades', 'url'=>array('create')),
	array('label'=>'Ver Historial de Enfermedades', 'url'=>array('view', 'id'=>$model->idhistorial)),
	array('label'=>'Administrar Historial de Enfermedades', 'url'=>array('admin')),
);
?>

<h1>Actualizar Historial de Enfermedades <?php echo $model->idhistorial; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>