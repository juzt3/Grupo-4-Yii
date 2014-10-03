<?php
/* @var $this CentrosMedicosController */
/* @var $model CentrosMedicos */

$this->breadcrumbs=array(
	'Centros Medicos'=>array('index'),
	$model->cod_centro_medico=>array('view','id'=>$model->cod_centro_medico),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Visualizar Centros Medicos', 'url'=>array('index')),
	array('label'=>'Registrar Centro Medico', 'url'=>array('create')),
	array('label'=>'Ver Centro Medico', 'url'=>array('view', 'id'=>$model->cod_centro_medico)),
	array('label'=>'Administrar Centros Medicos', 'url'=>array('admin')),
);
?>

<h1>Update CentrosMedicos <?php echo $model->cod_centro_medico; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>