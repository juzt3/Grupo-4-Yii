<?php
/* @var $this CentrosMedicosController */
/* @var $model CentrosMedicos */

$this->breadcrumbs=array(
	'Centros Medicos'=>array('index'),
	$model->cod_centro_medico,
);

$this->menu=array(
	array('label'=>'Visualizar Centros Medicos', 'url'=>array('index')),
	array('label'=>'Registrar Centro Medico', 'url'=>array('create')),
	array('label'=>'Modificar Centro Medico', 'url'=>array('update', 'id'=>$model->cod_centro_medico)),
	array('label'=>'Eliminar Centro Medico', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_centro_medico),'confirm'=>'Esta seguro que desea eliminar este Centro Medico?')),
	array('label'=>'Administrar Centros Medicos', 'url'=>array('admin')),
);
?>

<h1>Visualizar Centro Medico</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		/*'cod_centro_medico',*/
		'nombre_centro_medico',
		'direccion',
		'contacto',
		'director',
		'especialidad',
		'gubernamental',
	),
)); ?>
