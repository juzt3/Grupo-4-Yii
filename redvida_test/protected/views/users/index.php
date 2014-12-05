<?php
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Usuarios',
);

$this->menu=array(
	array('label'=>'Registrar Usuarios','url'=>array('create')),
	array('label'=>'Administrar Usuarios','url'=>array('admin')),
);
?>

<h1>Usuarios</h1>
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