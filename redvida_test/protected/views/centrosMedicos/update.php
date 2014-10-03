<?php
/* @var $this CentrosmedicosController */
/* @var $model Centrosmedicos */

$this->breadcrumbs=array(
	'Centros Medicos'=>array('index'),
	$model->cod_cm=>array('view','id'=>$model->cod_cm),
	'Update',
);

$this->menu=array(
	array('label'=>'List Centrosmedicos', 'url'=>array('index')),
	array('label'=>'Create Centrosmedicos', 'url'=>array('create')),
	array('label'=>'View Centrosmedicos', 'url'=>array('view', 'id'=>$model->cod_cm)),
	array('label'=>'Manage Centrosmedicos', 'url'=>array('admin')),
);
?>

<h1>Update Centrosmedicos <?php echo $model->cod_cm; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>