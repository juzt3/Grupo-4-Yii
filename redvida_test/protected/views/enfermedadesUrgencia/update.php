<?php
/* @var $this EnfermedadesUrgenciaController */
/* @var $model EnfermedadesUrgencia */
?>

<?php
$this->breadcrumbs=array(
	'Enfermedades Urgencias'=>array('index'),
	$model->id_enfermedad_urgencia=>array('view','id'=>$model->id_enfermedad_urgencia),
	'Update',
);

$this->menu=array(
	array('label'=>'List EnfermedadesUrgencia', 'url'=>array('index')),
	array('label'=>'Create EnfermedadesUrgencia', 'url'=>array('create')),
	array('label'=>'View EnfermedadesUrgencia', 'url'=>array('view', 'id'=>$model->id_enfermedad_urgencia)),
	array('label'=>'Manage EnfermedadesUrgencia', 'url'=>array('admin')),
);
?>

    <h1>Update EnfermedadesUrgencia <?php echo $model->id_enfermedad_urgencia; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>