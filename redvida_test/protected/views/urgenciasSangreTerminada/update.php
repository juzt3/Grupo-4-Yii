<?php
/* @var $this UrgenciasSangreTerminadaController */
/* @var $model UrgenciasSangreTerminada */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Sangre Terminadas'=>array('index'),
	$model->id_urgencia_sangre_terminada=>array('view','id'=>$model->id_urgencia_sangre_terminada),
	'Update',
);

$this->menu=array(
	array('label'=>'List UrgenciasSangreTerminada', 'url'=>array('index')),
	array('label'=>'Create UrgenciasSangreTerminada', 'url'=>array('create')),
	array('label'=>'View UrgenciasSangreTerminada', 'url'=>array('view', 'id'=>$model->id_urgencia_sangre_terminada)),
	array('label'=>'Manage UrgenciasSangreTerminada', 'url'=>array('admin')),
);
?>

    <h1>Update UrgenciasSangreTerminada <?php echo $model->id_urgencia_sangre_terminada; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>