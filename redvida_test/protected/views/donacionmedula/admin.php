<?php
/* @var $this DonacionmedulaController */
/* @var $model Donacionmedula */


$this->breadcrumbs=array(
	'Donación de Medula'=>array('index'),
	'Gestión de Donaciones de Medula',
);

$this->menu=array(
	array('label'=>'Mostrar Donaciones de Medula', 'url'=>array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#donacionmedula-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestión Donaciones de Medula</h1>

<p>
Puedes opcionalmente escribir un operador de comparacion(<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al comienzo de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'donacionmedula-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'rut',
		'd_medula_observaciones',
		'fecha_donacionmedula',
		'fecha_expiracionmedula',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>