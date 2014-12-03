<?php
/* @var $this UrgenciasOrganoController */
/* @var $model UrgenciasOrgano */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Organo'=>array('index'),
	'Terminar Urgencia',
);

$this->menu=array(
	array('label'=>'Lista Urgencias de Organo', 'url'=>array('index')),
	array('label'=>'Administrar Urgencias de Organo', 'url'=>array('admin')),
);
?>

<h1>Registrar Urgencia de Organo Terminada</h1>
<h2>Rut: <?php echo $model->rut?></h2>

<?php $this->renderPartial('_formmotivo', array('model'=>$model, 'organo'=>$organo)); ?>