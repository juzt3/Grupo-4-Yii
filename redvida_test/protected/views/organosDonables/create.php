<?php
/* @var $this OrganosDonablesController */
/* @var $model OrganosDonables */
?>

<?php
$this->breadcrumbs=array(
	'Organos Donables'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar Organos Donables', 'url'=>array('index')),
	array('label'=>'Administrar Organos Donables', 'url'=>array('admin')),
);
?>

<h1>Registrar Organos Donables</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>