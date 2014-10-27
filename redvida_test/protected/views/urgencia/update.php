<?php
/* @var $this UrgenciaController */
/* @var $model Urgencia */

$this->breadcrumbs=array(
	'Urgencias'=>array('index'),
	$model->rut=>array('view','id'=>$model->rut),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Lista de Urgencias', 'url'=>array('index')),
	array('label'=>'Crear Urgencia', 'url'=>array('create')),
	array('label'=>'Ver Urgencia', 'url'=>array('view', 'id'=>$model->rut)),
	array('label'=>'Gestion de Urgencias', 'url'=>array('admin')),
);
?>

<h1>Modificar Urgencia <?php echo $model->rut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>