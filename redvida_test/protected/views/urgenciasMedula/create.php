<?php
/* @var $this UrgenciasMedulaController */
/* @var $model UrgenciasMedula */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Medulas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UrgenciasMedula', 'url'=>array('index')),
	array('label'=>'Manage UrgenciasMedula', 'url'=>array('admin')),
);
?>

<h1>Create UrgenciasMedula</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>