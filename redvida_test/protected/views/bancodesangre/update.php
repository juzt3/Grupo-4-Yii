<?php
/* @var $this BancodesangreController */
/* @var $model Bancodesangre */
?>

<?php
$this->breadcrumbs=array(
	'Bancodesangres'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bancodesangre', 'url'=>array('index')),
	array('label'=>'View Bancodesangre', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Bancodesangre', 'url'=>array('admin')),
);
?>

    <h1>Update Bancodesangre <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>