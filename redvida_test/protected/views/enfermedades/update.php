<?php
/* @var $this EnfermedadesController */
/* @var $model Enfermedades */

$this->breadcrumbs=array(
	'Enfermedades'=>array('index'),
	$model->idenfermedad=>array('view','id'=>$model->idenfermedad),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Enfermedades', 'url'=>array('index')),
	array('label'=>'Registrar Enfermedades', 'url'=>array('create')),
	array('label'=>'Ver Enfermedad', 'url'=>array('view', 'id'=>$model->idenfermedad)),
	array('label'=>'Administrar Enfermedades', 'url'=>array('admin')),
);
?>

<h1>Actualizar Enfermedades <?php echo $model->idenfermedad; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>