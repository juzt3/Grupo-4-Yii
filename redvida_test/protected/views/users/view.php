<?php
/* @var $this UsersController */
/* @var $model Users */
?>

<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'Update Users', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Users', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1>View Users #<?php echo $model->id; ?></h1>

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