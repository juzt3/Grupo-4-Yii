<?php
/* @var $this UrgenciasOrganoTerminadaController */
/* @var $model UrgenciasOrganoTerminada */


$this->breadcrumbs=array(
	'Urgencias Organo Terminadas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List UrgenciasOrganoTerminada', 'url'=>array('index')),
	array('label'=>'Create UrgenciasOrganoTerminada', 'url'=>array('create')),
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

<h1>Manage Urgencias Organo Terminadas</h1>

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
		'enfermedad',
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