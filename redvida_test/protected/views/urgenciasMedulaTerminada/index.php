<?php
/* @var $this UrgenciasMedulaTerminadaController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Urgencias Medula Terminadas',
);

$this->menu=array(
	array('label'=>'Administrar Urgencias Medula Terminada','url'=>array('admin')),
);
?>

<h1>Urgencias Medula Terminadas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>