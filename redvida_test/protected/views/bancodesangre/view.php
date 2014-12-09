<?php
/* @var $this BancodesangreController */
/* @var $model Bancodesangre */
?>

<?php
$this->breadcrumbs=array(
	'Banco de sangre'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Banco de sangre', 'url'=>array('index')),
	array('label'=>'Solicitar Donaciones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('mailmasivo','tipo_sangre'=>$model->tipo_sangre),'confirm'=>'Esta a punto de enviar un mail masivo solicitando a los donantes de tipo '.$model->tipo_sangre.' a concurrir. ¿Esta seguro?')),
);
?>

<h1>Registro Banco de sangre <?php echo $model->tipo_sangre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'tipo_sangre',
		'cantidad',
	),
)); ?>