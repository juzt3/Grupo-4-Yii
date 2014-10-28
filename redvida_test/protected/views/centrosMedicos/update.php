<?php
/* @var $this CentrosmedicosController */
/* @var $model Centrosmedicos */
?>

<?php
$this->breadcrumbs=array(
	'Centros Medicos'=>array('index'),
	$model->cod_cm=>array('view','id'=>$model->cod_cm),
	'Editar Centro Medico',
);

$this->menu=array(
	array('label'=>'Mostrar Centros Medicos', 'url'=>array('index')),
	array('label'=>'Registrar Centro Medico', 'url'=>array('create')),
	array('label'=>'Ver Centros Medicos', 'url'=>array('view', 'id'=>$model->cod_cm)),
	array('label'=>'Administrar Centros Medicos', 'url'=>array('admin')),
);
?>

    <h1>Editar Centro Medico <?php echo $model->cod_cm; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>