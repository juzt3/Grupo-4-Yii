<?php
/* @var $this CentrosmedicosController */
/* @var $model Centrosmedicos */

$this->breadcrumbs=array(
	'Centrosmedicoses'=>array('index'),
	$model->cod_cm,
);

$this->menu=array(
	array('label'=>'List Centrosmedicos', 'url'=>array('index')),
	array('label'=>'Create Centrosmedicos', 'url'=>array('create')),
	array('label'=>'Update Centrosmedicos', 'url'=>array('update', 'id'=>$model->cod_cm)),
	array('label'=>'Delete Centrosmedicos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_cm),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Centrosmedicos', 'url'=>array('admin')),
);
?>

<h1>View Centrosmedicos #<?php echo $model->cod_cm; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_cm',
		'nombre_cm',
		'direccion_cm',
		'contacto_cm',
		'director_cm',
		'especialidad_cm',
		'gubernamental_cm',
	),
)); ?>
