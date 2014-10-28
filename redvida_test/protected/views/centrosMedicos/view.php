<?php
/* @var $this CentrosmedicosController */
/* @var $model Centrosmedicos */
?>

<?php
$this->breadcrumbs=array(
	'Centros Medicos'=>array('index'),
	$model->cod_cm,
);

$this->menu=array(
	array('label'=>'Mostrar Centros Medicos', 'url'=>array('index')),
	array('label'=>'Registrar Centro Medico', 'url'=>array('create')),
	array('label'=>'Editar Centro Medico', 'url'=>array('update', 'id'=>$model->cod_cm)),
	array('label'=>'Borrar Centro Medico', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_cm),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Centros Medicos', 'url'=>array('admin')),
);
?>

<h1>Ver Centros Medicos #<?php echo $model->cod_cm; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		//'cod_cm',
		'nombre_cm',
		'direccion_cm',
		'contacto_cm',
		'director_cm',
		'especialidad_cm',
		'gubernamental_cm',
	),
)); ?>