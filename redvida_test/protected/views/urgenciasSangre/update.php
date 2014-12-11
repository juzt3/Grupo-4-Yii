<?php
/* @var $this UrgenciasSangreController */
/* @var $model UrgenciasSangre */
?>

<?php
$this->breadcrumbs=array(
	'Modificar Urgencias de Sangre'=>array('index'),
	$model->id_urgencia_sangre=>array('view','id'=>$model->id_urgencia_sangre),
	'Modificar Urgencia de Sangre',
);

$this->menu=array(
	array('label'=>'Lista Urgencias de Sangre', 'url'=>array('index')),
	array('label'=>'Registrar Urgencia de Sangre', 'url'=>array('create')),
	array('label'=>'Ver Urgencias de Sangre', 'url'=>array('view', 'id'=>$model->id_urgencia_sangre)),
	array('label'=>'Administrar Urgencias de Sangre', 'url'=>array('admin')),
);
?>

    <h1>Modificar Urgencia de Sangre <?php echo $model->id_urgencia_sangre; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>