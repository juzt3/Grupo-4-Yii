<?php
/* @var $this OrganosDonablesController */
/* @var $model OrganosDonables */
?>

<?php
$this->breadcrumbs=array(
	'Organos Donables'=>array('index'),
	$model->id_organo=>array('view','id'=>$model->id_organo),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrganosDonables', 'url'=>array('index')),
	array('label'=>'Create OrganosDonables', 'url'=>array('create')),
	array('label'=>'View OrganosDonables', 'url'=>array('view', 'id'=>$model->id_organo)),
	array('label'=>'Manage OrganosDonables', 'url'=>array('admin')),
);
?>

    <h1>Update OrganosDonables <?php echo $model->id_organo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>