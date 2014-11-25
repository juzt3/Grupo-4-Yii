<?php
/* @var $this UrgenciasMedulaController */
/* @var $model UrgenciasMedula */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Medulas'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Lista Urgencias Medula', 'url'=>array('index')),
	array('label'=>'Administrar Urgencias de Medula', 'url'=>array('admin')),
);
?>

<h1>Registrar Urgencia Medula</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>