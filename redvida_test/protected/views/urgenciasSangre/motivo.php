<?php
/* @var $this UrgenciasSangreController */
/* @var $model UrgenciasSangre */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Sangres'=>array('index'),
	'Terminar Urgencia',
);

$this->menu=array(
	array('label'=>'Lista Urgencias de Sangre', 'url'=>array('index')),
	array('label'=>'Administrar Urgencias de Sangre', 'url'=>array('admin')),
);
?>

<h1>Registrar Urgencia de Sangre Terminada</h1>

<?php $this->renderPartial('_formmotivo', array('model'=>$model)); ?>