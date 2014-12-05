<?php
/* @var $this HistorialenfermedadesController */
/* @var $model Historialenfermedades */

$this->breadcrumbs=array(
	'Historial de Enfermedades'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Historial de Enfermedades', 'url'=>array('index')),
	//array('label'=>'Create Historial de Enfermedades', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#historialenfermedades-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Historial de Enfermedades</h1>

<p>
Opcionalmente puedes introducir operadores de comparacion (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de tus valores de busqueda para especificar como debe efectuarse la comparacion.
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'historialenfermedades-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'idhistorial',
		'rut',
		'idenfermedad',
		'fecha',
		'fecha_cura',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
