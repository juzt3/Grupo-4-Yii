<?php
/* @var $this DonacionsangreController */
/* @var $model Donacionsangre */


$this->breadcrumbs=array(
	'Donación de Sangre'=>array('index'),
	'Gestion de Donación de Sangre',
);

$this->menu=array(
	array('label'=>'Mostrar Donación de Sangre', 'url'=>array('index')),
	//array('label'=>'Registrar Donación de Sangre', 'url'=>array('create')),
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

<h1>Gestion de Donación de Sangre</h1>

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
		'cantidad_sangre',
		'dsangre_observaciones',
		'tipo_sangre',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>