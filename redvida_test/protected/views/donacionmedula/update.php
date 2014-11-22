<?php
/* @var $this DonacionmedulaController */
/* @var $model Donacionmedula */
?>

<?php
$this->breadcrumbs=array(
	'Donación de Medula'=>array('index'),
	$model->id_donacionmedula=>array('view','id'=>$model->id_donacionmedula),
	'Modificar Donación de Medula',
);

$this->menu=array(
	array('label'=>'Mostrar Donación de Medula', 'url'=>array('index')),
	array('label'=>'Registrar Donación de Medula', 'url'=>array('create')),
	array('label'=>'Ver Donación de Medula', 'url'=>array('view', 'id'=>$model->id_donacionmedula)),
	array('label'=>'Gestionar Donación de Medula', 'url'=>array('admin')),
);
?>

    <h1>Modificar Donación de Medula <?php echo $model->id_donacionmedula; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>