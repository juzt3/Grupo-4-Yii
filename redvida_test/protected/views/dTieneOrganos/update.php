<?php
/* @var $this DTieneOrganosController */
/* @var $model DTieneOrganos */
?>

<?php
$this->breadcrumbs=array(
	'Dtiene Organoses'=>array('index'),
	$model->id_tiene_organos=>array('view','id'=>$model->id_tiene_organos),
	'Update',
);

$this->menu=array(
	array('label'=>'List DTieneOrganos', 'url'=>array('index')),
	array('label'=>'Create DTieneOrganos', 'url'=>array('create')),
	array('label'=>'View DTieneOrganos', 'url'=>array('view', 'id'=>$model->id_tiene_organos)),
	array('label'=>'Manage DTieneOrganos', 'url'=>array('admin')),
);
?>

    <h1>Update DTieneOrganos <?php echo $model->id_tiene_organos; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>