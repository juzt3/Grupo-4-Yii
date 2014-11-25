<?php
/* @var $this UrgenciasOrganosController */
/* @var $model UrgenciasOrganos */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Organos'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Lista Urgencias de Organos', 'url'=>array('index')),
	array('label'=>'Administrar Urgencias de Organos', 'url'=>array('admin')),
);
?>

<h1>Registrar Urgencias de Organos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>