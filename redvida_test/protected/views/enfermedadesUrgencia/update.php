<?php
/* @var $this EnfermedadesUrgenciaController */
/* @var $model EnfermedadesUrgencia */
?>

<?php
$this->breadcrumbs=array(
	'Enfermedades de Urgencias'=>array('index'),
	$model->id_enfermedad_urgencia=>array('view','id'=>$model->id_enfermedad_urgencia),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Enfermedades de Urgencia', 'url'=>array('index')),
	array('label'=>'Registrar Enfermedades de Urgencia', 'url'=>array('create')),
	array('label'=>'Ver Enfermedad de Urgencia', 'url'=>array('view', 'id'=>$model->id_enfermedad_urgencia)),
	array('label'=>'Administrar Enfermedades de Urgencia', 'url'=>array('admin')),
);
?>

    <h1>Modificar Enfermedad de Urgencia <?php echo $model->id_enfermedad_urgencia; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>