<?php
/* @var $this UrgenciasMedulaController */
/* @var $model UrgenciasMedula */


$this->breadcrumbs=array(
	'Urgencias Medulas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List UrgenciasMedula', 'url'=>array('index')),
	array('label'=>'Create UrgenciasMedula', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#urgencias-medula-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Urgencias Medulas</h1>

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
	'id'=>'urgencias-medula-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_urgencia_medula',
		'cod_cm',
		'rut',
		'nombre_paciente',
		'apellido_pat',
		'apellido_mat',
		/*
		'afiliacion',
		'grado_urgencia',
		'tipo_transplante',
		'fecha_ini',
		'fecha_fin',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>