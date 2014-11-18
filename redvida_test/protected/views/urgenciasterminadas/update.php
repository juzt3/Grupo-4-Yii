<?php
/* @var $this UrgenciasterminadasController */
/* @var $model Urgenciasterminadas */

$this->breadcrumbs=array(
	'Urgenciasterminadases'=>array('index'),
	$model->rut=>array('view','id'=>$model->rut),
	'Update',
);

$this->menu=array(
	array('label'=>'List Urgenciasterminadas', 'url'=>array('index')),
	array('label'=>'Create Urgenciasterminadas', 'url'=>array('create')),
	array('label'=>'View Urgenciasterminadas', 'url'=>array('view', 'id'=>$model->rut)),
	array('label'=>'Manage Urgenciasterminadas', 'url'=>array('admin')),
);
?>

<h1>Update Urgenciasterminadas <?php echo $model->rut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>