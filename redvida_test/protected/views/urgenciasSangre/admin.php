<?php
/* @var $this UrgenciasSangreController */
/* @var $model UrgenciasSangre */


$this->breadcrumbs=array(
	'Urgencias Sangres'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista Urgencias de Sangre', 'url'=>array('index')),
	array('label'=>'Registrar Urgencia de Sangre', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#urgencias-sangre-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Urgencias de Sangres</h1>

<p>
    Opcionalmente puedes introducir operadores de comparacion (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
        &lt;&gt;</b>
 <b>=</b>) al principio de cada uno de tus valores de busqueda para especificar como debe efectuarse la comparacion.
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'urgencias-sangre-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_urgencia_sangre',
		'codCm.nombre_cm',
		'rut',
		'nombre_paciente',
		'apellido_pat',
		'apellido_mat',
		'grado_urgencia',
		'tipo_sangre',
		'cantidad_sangre',
		/*
		'afiliacion',
		
		'fecha_ini',
		'fecha_fin',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>