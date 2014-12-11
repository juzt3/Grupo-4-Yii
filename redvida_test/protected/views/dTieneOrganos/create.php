<?php
/* @var $this DTieneOrganosController */
/* @var $model DTieneOrganos */
?>

<?php
$this->breadcrumbs=array(
	'Organos Disponibles'=>array('index'),
	'Registro de Organos Donables',
);

$this->menu=array(
	array('label'=>'Mostrar Organos Disponibles', 'url'=>array('index')),
	array('label'=>'Gestionar Organos Disponibles', 'url'=>array('admin')),
);
?>

<h1>Registrar Organos Donables del Paciente Rut: <?php echo $rut?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'rut'=>$rut)); ?>