<?php
/* @var $this UrgenciasOrganosController */
/* @var $model UrgenciasOrganos */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Organos'=>array('index'),
	$model->id_urgencia_organo=>array('view','id'=>$model->id_urgencia_organo),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista Urgencias de Organos', 'url'=>array('index')),
	array('label'=>'Registrar Urgencia de Organos', 'url'=>array('create')),
	array('label'=>'Ver Urgencias de Organos', 'url'=>array('view', 'id'=>$model->id_urgencia_organo)),
	array('label'=>'Administrar Urgencias de Organos', 'url'=>array('admin')),
);
?>

    <h1>Modificar Urgencia de Organos <?php echo $model->id_urgencia_organo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>