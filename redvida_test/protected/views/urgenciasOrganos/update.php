<?php
/* @var $this UrgenciasOrganosController */
/* @var $model UrgenciasOrganos */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Organoses'=>array('index'),
	$model->id_urgencia_organo=>array('view','id'=>$model->id_urgencia_organo),
	'Update',
);

$this->menu=array(
	array('label'=>'List UrgenciasOrganos', 'url'=>array('index')),
	array('label'=>'Create UrgenciasOrganos', 'url'=>array('create')),
	array('label'=>'View UrgenciasOrganos', 'url'=>array('view', 'id'=>$model->id_urgencia_organo)),
	array('label'=>'Manage UrgenciasOrganos', 'url'=>array('admin')),
);
?>

    <h1>Update UrgenciasOrganos <?php echo $model->id_urgencia_organo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>