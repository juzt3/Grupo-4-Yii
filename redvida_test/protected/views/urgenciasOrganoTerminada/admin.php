<?php
/* @var $this UrgenciasOrganoTerminadaController */
/* @var $model UrgenciasOrganoTerminada */


$this->breadcrumbs=array(
	'Urgencias Organo Terminadas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista de Urgencias Organo Terminadas', 'url'=>array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#urgencias-organo-terminada-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Urgencias de Organos Terminadas</h1>

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
	'id'=>'urgencias-organo-terminada-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_urgencia_organo',
		'cod_cm',
		'id_organo',
		'rut',
		'nombre_paciente',
		'apellido_pat',
		/*
		'apellido_mat',
		'afiliacion',
		'grado_urgencia',
		'necesidad_transplante',
		'fecha_ini',
		'fecha_fin',
		'motivo',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>