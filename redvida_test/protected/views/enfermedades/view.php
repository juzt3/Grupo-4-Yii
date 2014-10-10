<?php
/* @var $this EnfermedadesController */
/* @var $model Enfermedades */

$this->breadcrumbs=array(
	'Enfermedades'=>array('index'),
	$model->idenfermedad,
);

$this->menu=array(
	array('label'=>'Listar Enfermedades', 'url'=>array('index')),
	array('label'=>'Crear Enfermedades', 'url'=>array('create')),
	array('label'=>'Actualizar Enfermedades', 'url'=>array('update', 'id'=>$model->idenfermedad)),
	array('label'=>'Borrar Enfermedades', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idenfermedad),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Enfermedades', 'url'=>array('admin')),
);
?>

<h1>Ver Enfermedade <?php echo $model->nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'idenfermedad',
		'nombre',
		'descripcion',
	),
)); ?>
