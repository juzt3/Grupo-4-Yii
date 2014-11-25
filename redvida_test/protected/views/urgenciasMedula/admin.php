<?php
/* @var $this UrgenciasMedulaController */
/* @var $model UrgenciasMedula */


$this->breadcrumbs=array(
	'Urgencias Medulas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista Urgencias de Medula', 'url'=>array('index')),
	array('label'=>'Registrar Urgencia de Medula', 'url'=>array('create')),
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

<h1>Administrar Urgencias de Medula</h1>

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