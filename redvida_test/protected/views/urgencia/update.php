<?php
/* @var $this UrgenciaController */
/* @var $model Urgencia */

$this->breadcrumbs=array(
	'Urgencias'=>array('index'),
	$model->rut=>array('view','id'=>$model->rut),
	'Update',
);

$this->menu=array(
	array('label'=>'List Urgencia', 'url'=>array('index')),
	array('label'=>'Create Urgencia', 'url'=>array('create')),
	array('label'=>'View Urgencia', 'url'=>array('view', 'id'=>$model->rut)),
	array('label'=>'Manage Urgencia', 'url'=>array('admin')),
);
?>

<h1>Update Urgencia <?php echo $model->rut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>