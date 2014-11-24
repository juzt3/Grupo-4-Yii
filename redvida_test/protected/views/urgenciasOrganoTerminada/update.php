<?php
/* @var $this UrgenciasOrganoTerminadaController */
/* @var $model UrgenciasOrganoTerminada */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Organo Terminadas'=>array('index'),
	$model->id_urgencia_organo=>array('view','id'=>$model->id_urgencia_organo),
	'Update',
);

$this->menu=array(
	array('label'=>'List UrgenciasOrganoTerminada', 'url'=>array('index')),
	array('label'=>'Create UrgenciasOrganoTerminada', 'url'=>array('create')),
	array('label'=>'View UrgenciasOrganoTerminada', 'url'=>array('view', 'id'=>$model->id_urgencia_organo)),
	array('label'=>'Manage UrgenciasOrganoTerminada', 'url'=>array('admin')),
);
?>

    <h1>Update UrgenciasOrganoTerminada <?php echo $model->id_urgencia_organo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>