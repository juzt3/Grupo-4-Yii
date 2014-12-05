<?php
/* @var $this UsersController */
/* @var $model Users */
?>

<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Registrar Usuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>