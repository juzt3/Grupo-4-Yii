<?php
/* @var $this UrgenciasMedulaTerminadaController */
/* @var $model UrgenciasMedulaTerminada */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Medula Terminadas'=>array('index'),
	$model->id_urgencia_medula_terminada=>array('view','id'=>$model->id_urgencia_medula_terminada),
	'Update',
);

$this->menu=array(
	array('label'=>'List UrgenciasMedulaTerminada', 'url'=>array('index')),
	array('label'=>'Create UrgenciasMedulaTerminada', 'url'=>array('create')),
	array('label'=>'View UrgenciasMedulaTerminada', 'url'=>array('view', 'id'=>$model->id_urgencia_medula_terminada)),
	array('label'=>'Manage UrgenciasMedulaTerminada', 'url'=>array('admin')),
);
?>

    <h1>Update UrgenciasMedulaTerminada <?php echo $model->id_urgencia_medula_terminada; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>