<?php
/* @var $this UrgenciaController */
/* @var $model Urgencia */

$this->breadcrumbs=array(
	'Urgencias'=>array('index'),
	$model->rut,
);

$this->menu=array(
	array('label'=>'List Urgencia', 'url'=>array('index')),
	array('label'=>'Create Urgencia', 'url'=>array('create')),
	array('label'=>'Update Urgencia', 'url'=>array('update', 'id'=>$model->rut)),
	array('label'=>'Delete Urgencia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Urgencia', 'url'=>array('admin')),
);
?>

<h1>View Urgencia #<?php echo $model->rut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'rut',
		'nombre_paciente',
		'apellido_pat',
		'apellido_mat',
		'afiliacion',
		'enfermedad',
		'grado_urgencia',
		'necesidad_transplante',
		'centro_medico',
	),
)); ?>
