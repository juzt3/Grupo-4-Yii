<?php
/* @var $this UsersController */
/* @var $model Users */
?>

<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Registrar Usuarios', 'url'=>array('create')),
	array('label'=>'Ver Usuario', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

    <h1>Modificar Usuarios <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>