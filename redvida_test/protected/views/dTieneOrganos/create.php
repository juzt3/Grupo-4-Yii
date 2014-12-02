<?php
/* @var $this DTieneOrganosController */
/* @var $model DTieneOrganos */
?>

<?php
$this->breadcrumbs=array(
	'Dtiene Organoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DTieneOrganos', 'url'=>array('index')),
	array('label'=>'Manage DTieneOrganos', 'url'=>array('admin')),
);
?>

<h1>Create DTieneOrganos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>