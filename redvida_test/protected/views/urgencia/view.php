<?php
/* @var $this UrgenciaController */
/* @var $model Urgencia */

$this->breadcrumbs=array(
	'Urgencias'=>array('index'),
	$model->rut,
);

$this->menu=array(
	array('label'=>'Lista de Urgencias', 'url'=>array('index')),
	array('label'=>'Crear Urgencia', 'url'=>array('create')),
	array('label'=>'Editar Urgencia', 'url'=>array('update', 'id'=>$model->rut)),
	array('label'=>'Borrar Urgencia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rut),'confirm'=>'Está seguro que desea borrar la urgencia?')),
	array('label'=>'Gestion de Urgencias', 'url'=>array('admin')),
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
