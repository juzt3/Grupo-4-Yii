<?php
/* @var $this UrgenciasterminadasController */
/* @var $model Urgenciasterminadas */

$this->breadcrumbs=array(
	'Urgenciasterminadases'=>array('index'),
	$model->rut,
);

$this->menu=array(
	array('label'=>'List Urgenciasterminadas', 'url'=>array('index')),
	array('label'=>'Create Urgenciasterminadas', 'url'=>array('create')),
	array('label'=>'Update Urgenciasterminadas', 'url'=>array('update', 'id'=>$model->rut)),
	array('label'=>'Delete Urgenciasterminadas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Urgenciasterminadas', 'url'=>array('admin')),
);
?>

<h1>View Urgenciasterminadas #<?php echo $model->rut; ?></h1>

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
		'fecha_ini',
		'fecha_fin',
		'centro_medico',
	),
)); ?>
