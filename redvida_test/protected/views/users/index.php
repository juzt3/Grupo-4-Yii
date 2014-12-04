<?php
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>'Create Users','url'=>array('create')),
	array('label'=>'Manage Users','url'=>array('admin')),
);
?>

<h1>Users</h1>
<?php 
//	Yii::app()->authManager->createRole("Secretaria");
//	Yii::app()->authManager->createRole("Administrador del Sistema");
//	Yii::app()->authManager->createRole("Administrador de Donaciones y Necesitades Medicas");
//	Yii::app()->authManager->createRole("Jefe Area de Salud");
?>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>