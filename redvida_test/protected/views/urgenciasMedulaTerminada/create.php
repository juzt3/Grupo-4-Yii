<?php
/* @var $this UrgenciasMedulaTerminadaController */
/* @var $model UrgenciasMedulaTerminada */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Medula Terminadas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UrgenciasMedulaTerminada', 'url'=>array('index')),
	array('label'=>'Manage UrgenciasMedulaTerminada', 'url'=>array('admin')),
);
?>

<h1>Create UrgenciasMedulaTerminada</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>