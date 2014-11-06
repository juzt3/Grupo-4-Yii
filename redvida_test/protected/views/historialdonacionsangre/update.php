<?php
/* @var $this HistorialdonacionsangreController */
/* @var $model Historialdonacionsangre */
?>

<?php
$this->breadcrumbs=array(
	'Historialdonacionsangres'=>array('index'),
	$model->id_historialsangre=>array('view','id'=>$model->id_historialsangre),
	'Update',
);

$this->menu=array(
	array('label'=>'List Historialdonacionsangre', 'url'=>array('index')),
	array('label'=>'Create Historialdonacionsangre', 'url'=>array('create')),
	array('label'=>'View Historialdonacionsangre', 'url'=>array('view', 'id'=>$model->id_historialsangre)),
	array('label'=>'Manage Historialdonacionsangre', 'url'=>array('admin')),
);
?>

    <h1>Update Historialdonacionsangre <?php echo $model->id_historialsangre; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>