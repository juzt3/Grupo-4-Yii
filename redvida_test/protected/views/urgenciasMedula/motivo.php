<?php
/* @var $this UrgenciasMedulaController */
/* @var $model UrgenciasMedula */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Medula'=>array('index'),
	'Terminar Urgencia',
);

$this->menu=array(
	array('label'=>'Lista Urgencias de Medula', 'url'=>array('index')),
	array('label'=>'Administrar Urgencias de Medula', 'url'=>array('admin')),
);
?>

<h1>Registrar Urgencia de Medula Terminada</h1>

<?php $this->renderPartial('_formmotivo', array('model'=>$model)); ?>