<?php
/* @var $this UsersController */
/* @var $model Users */
?>

<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Registrar Usuarios', 'url'=>array('create')),
	array('label'=>'Modificar Usuarios', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Ver Usuario #<?php echo $model->id; ?></h1>

<h4>Permisos</h4>
<ul class="nav nav-tabs nav-stacked">
	<?php foreach (Yii::app()->authManager->getAuthItems() as $data):?>
	<?php $enabled=Yii::app()->authManager->checkAccess($data->name, $model->id); ?>
		<li>
			<h5><?php echo $data->name?>
				<?php echo CHtml::link($enabled?"Quitar":"Dar", array("users/asignar", "id"=>$model->id, "item"=>$data->name), 
					array("class"=>$enabled?"btn btn-primary":"btn")); ?>
			</h5>
			<p>
				<?php echo $enabled?"<span class=\"label label-important\">Asignado</span>":""; ?>
				<?php echo $data->description ?>
			</p>
			<hr>
		</li>
	<?php endforeach;?>
</ul>
<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'username',
		'password',
		'email',
	),
)); ?>