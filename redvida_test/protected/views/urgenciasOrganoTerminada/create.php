<?php
/* @var $this UrgenciasOrganoTerminadaController */
/* @var $model UrgenciasOrganoTerminada */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Organo Terminadas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UrgenciasOrganoTerminada', 'url'=>array('index')),
	array('label'=>'Manage UrgenciasOrganoTerminada', 'url'=>array('admin')),
);
?>

<h1>Create UrgenciasOrganoTerminada</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>