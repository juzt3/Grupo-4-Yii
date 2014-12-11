<?php
/* @var $this BancodesangreController */
/* @var $data Bancodesangre */
?>
<style>
.panel{
	margin-bottom: 0px;
}
</style>

<div class="row-fluid">
	<div class="span3">
		<div class="panel panel-info">
			<div class="panel panel-heading">
				<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_sangre')); ?>:</b>
				<?php echo CHtml::link(CHtml::encode($data->tipo_sangre),array('view','id'=>$data->id)); ?>
			</div>	  
			<div class="panel panel-body">
				<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
				<?php echo CHtml::encode($data->cantidad); ?><span> CC</span>
			</div>
		</div>
	</div>
</div>
<br>
