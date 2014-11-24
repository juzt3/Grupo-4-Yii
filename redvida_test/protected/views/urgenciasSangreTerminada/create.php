<?php
/* @var $this UrgenciasSangreTerminadaController */
/* @var $model UrgenciasSangreTerminada */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Sangre Terminadas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UrgenciasSangreTerminada', 'url'=>array('index')),
	array('label'=>'Manage UrgenciasSangreTerminada', 'url'=>array('admin')),
);
?>

<h1>Create UrgenciasSangreTerminada</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>