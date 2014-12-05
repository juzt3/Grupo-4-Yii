<?php
/* @var $this OrganosDonablesController */
/* @var $model OrganosDonables */
?>

<?php
$this->breadcrumbs=array(
	'Organos Donables'=>array('index'),
	$model->id_organo=>array('view','id'=>$model->id_organo),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Organos Donables', 'url'=>array('index')),
	array('label'=>'Registrar Organos Donables', 'url'=>array('create')),
	array('label'=>'VEr Organo Donable', 'url'=>array('view', 'id'=>$model->id_organo)),
	array('label'=>'Administrar Organos Donables', 'url'=>array('admin')),
);
?>

    <h1>Modificar Organo Donable <?php echo $model->id_organo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>