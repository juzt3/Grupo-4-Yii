<?php
/* @var $this UrgenciasOrganosController */
/* @var $model UrgenciasOrganos */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Organoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UrgenciasOrganos', 'url'=>array('index')),
	array('label'=>'Manage UrgenciasOrganos', 'url'=>array('admin')),
);
?>

<h1>Create UrgenciasOrganos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>