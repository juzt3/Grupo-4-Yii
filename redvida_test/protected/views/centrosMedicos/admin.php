<?php
/* @var $this CentrosMedicosController */
/* @var $model CentrosMedicos */

$this->breadcrumbs=array(
	'Centros Medicos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Visualizar Centros Medicos', 'url'=>array('index')),
	array('label'=>'Registrar Centro Medico', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#centros-medicos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Centros Medicos</h1>

<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'centros-medicos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		/*'cod_centro_medico',*/
		'nombre_centro_medico',
		'direccion',
		'contacto',
		'director',
		'especialidad',
		'gubernamental',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
