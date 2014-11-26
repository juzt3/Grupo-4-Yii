<?php
/* @var $this DonacionsangreController */
/* @var $model Donacionsangre */


$this->breadcrumbs=array(
	'Donación de Sangre'=>array('index'),
	'Gestión de Donación de Sangre',
);

$this->menu=array(
	array('label'=>'Mostrar Donaciones de Sangre', 'url'=>array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#donacionsangre-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestión de Donaciones de Sangre</h1>

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
	'id'=>'donacionsangre-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_donacionsangre',
		'rut',
		'cantidad_sangre',
		'dsangre_observaciones',
		'tipo_sangre',
		'fecha_donacionsangre',
		'fecha_expiracion',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>