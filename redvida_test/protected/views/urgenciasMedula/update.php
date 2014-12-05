<?php
/* @var $this UrgenciasMedulaController */
/* @var $model UrgenciasMedula */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Medulas'=>array('index'),
	$model->id_urgencia_medula=>array('view','id'=>$model->id_urgencia_medula),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Lista Urgencias de Medula', 'url'=>array('index')),
	array('label'=>'Registrar Urgencia de Medula', 'url'=>array('create')),
	array('label'=>'Ver Urgencias de Medula', 'url'=>array('view', 'id'=>$model->id_urgencia_medula)),
	array('label'=>'Administrar Urgencias de Medula', 'url'=>array('admin')),
);
?>

    <h1>Modificar Urgencia de Medula <?php echo $model->id_urgencia_medula; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>