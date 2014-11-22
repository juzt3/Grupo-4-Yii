<?php
/* @var $this UrgenciasOrganosController */
/* @var $model UrgenciasOrganos */


$this->breadcrumbs=array(
	'Urgencias Organoses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List UrgenciasOrganos', 'url'=>array('index')),
	array('label'=>'Create UrgenciasOrganos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#urgencias-organos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Urgencias Organoses</h1>

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
	'id'=>'urgencias-organos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_urgencia_organo',
		'cod_cm',
		'id_organo',
		'id_enfermedad_urgencia',
		'rut',
		'nombre_paciente',
		/*
		'apellido_pat',
		'apellido_mat',
		'afiliacion',
		'grado_urgencia',
		'fecha_ini',
		'fecha_fin',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>