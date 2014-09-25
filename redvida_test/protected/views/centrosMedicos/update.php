<?php
/* @var $this CentrosMedicosController */
/* @var $model CentrosMedicos */

$this->breadcrumbs=array(
	'Centros Medicoses'=>array('index'),
	$model->cod_centro_medico=>array('view','id'=>$model->cod_centro_medico),
	'Update',
);

$this->menu=array(
	array('label'=>'List CentrosMedicos', 'url'=>array('index')),
	array('label'=>'Create CentrosMedicos', 'url'=>array('create')),
	array('label'=>'View CentrosMedicos', 'url'=>array('view', 'id'=>$model->cod_centro_medico)),
	array('label'=>'Manage CentrosMedicos', 'url'=>array('admin')),
);
?>

<h1>Update CentrosMedicos <?php echo $model->cod_centro_medico; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>