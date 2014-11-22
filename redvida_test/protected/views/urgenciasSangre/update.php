<?php
/* @var $this UrgenciasSangreController */
/* @var $model UrgenciasSangre */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Sangres'=>array('index'),
	$model->id_urgencia_sangre=>array('view','id'=>$model->id_urgencia_sangre),
	'Update',
);

$this->menu=array(
	array('label'=>'List UrgenciasSangre', 'url'=>array('index')),
	array('label'=>'Create UrgenciasSangre', 'url'=>array('create')),
	array('label'=>'View UrgenciasSangre', 'url'=>array('view', 'id'=>$model->id_urgencia_sangre)),
	array('label'=>'Manage UrgenciasSangre', 'url'=>array('admin')),
);
?>

    <h1>Update UrgenciasSangre <?php echo $model->id_urgencia_sangre; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>