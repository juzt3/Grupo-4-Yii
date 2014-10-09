<?php
/* @var $this CentrosmedicosController */
/* @var $model Centrosmedicos */

$this->breadcrumbs=array(
	'Centros Medicos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Mostrar Centros Medicos', 'url'=>array('index')),
	array('label'=>'Registrar Centro Medico', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#centrosmedicos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Centros Medicos</h1>

<p>
Puedes opcionalmente escribir un operador de comparacion(<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al comienzo de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'centrosmedicos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nombre_cm',
		'direccion_cm',
		'contacto_cm',
		'director_cm',
		'especialidad_cm',
		'gubernamental_cm',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
