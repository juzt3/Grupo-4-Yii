<?php
/* @var $this OrganosDonablesController */
/* @var $model OrganosDonables */
?>

<?php
$this->breadcrumbs=array(
	'Organos Donables'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OrganosDonables', 'url'=>array('index')),
	array('label'=>'Manage OrganosDonables', 'url'=>array('admin')),
);
?>

<h1>Create OrganosDonables</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>