<?php
/* @var $this CentrosmedicosController */
/* @var $model Centrosmedicos */

$this->breadcrumbs=array(
	'Centrosmedicoses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Centrosmedicos', 'url'=>array('index')),
	array('label'=>'Create Centrosmedicos', 'url'=>array('create')),
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

<h1>Manage Centrosmedicoses</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
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
		'cod_cm',
		'nombre_cm',
		'direccion_cm',
		'contacto_cm',
		'director_cm',
		'especialidad_cm',
		/*
		'gubernamental_cm',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
