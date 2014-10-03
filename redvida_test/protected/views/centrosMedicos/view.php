<?php
/* @var $this CentrosmedicosController */
/* @var $model Centrosmedicos */

$this->breadcrumbs=array(
	'Centros Medicos'=>array('index'),
	$model->cod_cm,
);

$this->menu=array(
	array('label'=>'Mostrar Centros Medicos', 'url'=>array('index')),
	array('label'=>'Registrar Centro Medico', 'url'=>array('create')),
	array('label'=>'Editar Centro Medico', 'url'=>array('update', 'id'=>$model->cod_cm)),
	array('label'=>'Eliminar Centro Medicos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_cm),'confirm'=>'Esta seguro que desea eliminar el centro medico?')),
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
