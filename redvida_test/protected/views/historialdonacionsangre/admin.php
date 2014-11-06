<?php
/* @var $this HistorialdonacionsangreController */
/* @var $model Historialdonacionsangre */


$this->breadcrumbs=array(
	'Historialdonacionsangres'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Historialdonacionsangre', 'url'=>array('index')),
	array('label'=>'Create Historialdonacionsangre', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#historialdonacionsangre-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Historialdonacionsangres</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
        &lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'historialdonacionsangre-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_historialsangre',
		'id_donacionsangre',
		'rut',
		'fecha_donacionsangre',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>