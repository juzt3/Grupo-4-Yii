<?php
/* @var $this UrgenciasMedulaController */
/* @var $model UrgenciasMedula */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Medulas'=>array('index'),
	$model->id_urgencia_medula=>array('view','id'=>$model->id_urgencia_medula),
	'Update',
);

$this->menu=array(
	array('label'=>'List UrgenciasMedula', 'url'=>array('index')),
	array('label'=>'Create UrgenciasMedula', 'url'=>array('create')),
	array('label'=>'View UrgenciasMedula', 'url'=>array('view', 'id'=>$model->id_urgencia_medula)),
	array('label'=>'Manage UrgenciasMedula', 'url'=>array('admin')),
);
?>

    <h1>Update UrgenciasMedula <?php echo $model->id_urgencia_medula; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>