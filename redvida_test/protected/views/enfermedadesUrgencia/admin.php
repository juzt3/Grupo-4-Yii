<?php
/* @var $this EnfermedadesdeUrgenciaController */
/* @var $model EnfermedadesdeUrgencia */


$this->breadcrumbs=array(
	'Enfermedades de Urgencias'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Enfermedades de Urgencia', 'url'=>array('index')),
	array('label'=>'Registrar Enfermedades de Urgencia', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#enfermedades-urgencia-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Enfermedades de Urgencias</h1>

<p>
Opcionalmente puedes introducir operadores de comparacion (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
        &lt;&gt;</b>
o <b>=</b>) al principio de cada uno de tus valores de busqueda para especificar como debe efectuarse la comparacion.
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'enfermedades-urgencia-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_enfermedad_urgencia',
		'nombre',
		'descripcion',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>