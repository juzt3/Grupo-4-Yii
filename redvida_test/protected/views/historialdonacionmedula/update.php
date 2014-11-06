<?php
/* @var $this HistorialdonacionmedulaController */
/* @var $model Historialdonacionmedula */
?>

<?php
$this->breadcrumbs=array(
	'Historialdonacionmedulas'=>array('index'),
	$model->id_historialmedula=>array('view','id'=>$model->id_historialmedula),
	'Update',
);

$this->menu=array(
	array('label'=>'List Historialdonacionmedula', 'url'=>array('index')),
	array('label'=>'Create Historialdonacionmedula', 'url'=>array('create')),
	array('label'=>'View Historialdonacionmedula', 'url'=>array('view', 'id'=>$model->id_historialmedula)),
	array('label'=>'Manage Historialdonacionmedula', 'url'=>array('admin')),
);
?>

    <h1>Update Historialdonacionmedula <?php echo $model->id_historialmedula; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>