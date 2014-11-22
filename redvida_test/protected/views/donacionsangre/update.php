<?php
/* @var $this DonacionsangreController */
/* @var $model Donacionsangre */
?>

<?php
$this->breadcrumbs=array(
	'Donación de Sangre'=>array('index'),
	$model->id_donacionsangre=>array('view','id'=>$model->id_donacionsangre),
	'Modificar Donación de Sangre',
);

$this->menu=array(
	array('label'=>'Mostrar Donaciones de Sangre', 'url'=>array('index')),
	//array('label'=>'Registrar Donación de Sangre', 'url'=>array('create')),
	array('label'=>'Ver Donación de Sangre', 'url'=>array('view', 'id'=>$model->id_donacionsangre)),
	array('label'=>'Gestionar Donaciones de Sangre', 'url'=>array('admin')),
);
?>

    <h1>Modificar Donación de Sangre <?php echo $model->id_donacionsangre; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>