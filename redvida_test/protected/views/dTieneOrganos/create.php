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

<h1>Registrar Organos Donables del paciente Rut: <?php echo $rut?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'rut'=>$rut)); ?>