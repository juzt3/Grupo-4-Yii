<?php
/* @var $this UrgenciasSangreController */
/* @var $model UrgenciasSangre */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Sangres'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UrgenciasSangre', 'url'=>array('index')),
	array('label'=>'Manage UrgenciasSangre', 'url'=>array('admin')),
);
?>

<h1>Create UrgenciasSangre</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>