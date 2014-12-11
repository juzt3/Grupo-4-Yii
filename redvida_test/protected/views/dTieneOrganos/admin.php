<?php
/* @var $this DTieneOrganosController */
/* @var $model DTieneOrganos */


$this->breadcrumbs=array(
	'Organos Disponibles'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Mostrar Organos Disponibles', 'url'=>array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dtiene-organos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Organos Disponibles</h1>

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
	'id'=>'dtiene-organos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'rut',
		'id_organo',
		'idOrgano.nombre_organo',
		'transplantado',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>