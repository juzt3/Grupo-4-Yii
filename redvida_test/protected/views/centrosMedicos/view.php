<?php
/* @var $this CentrosMedicosController */
/* @var $model CentrosMedicos */

$this->breadcrumbs=array(
	'Centros Medicoses'=>array('index'),
	$model->cod_centro_medico,
);

$this->menu=array(
	array('label'=>'List CentrosMedicos', 'url'=>array('index')),
	array('label'=>'Create CentrosMedicos', 'url'=>array('create')),
	array('label'=>'Update CentrosMedicos', 'url'=>array('update', 'id'=>$model->cod_centro_medico)),
	array('label'=>'Delete CentrosMedicos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_centro_medico),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CentrosMedicos', 'url'=>array('admin')),
);
?>

<h1>View CentrosMedicos #<?php echo $model->cod_centro_medico; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_centro_medico',
		'nombre_centro_medico',
		'direccion',
		'contacto',
		'director',
		'especialidad',
		'gubernamental',
	),
)); ?>
