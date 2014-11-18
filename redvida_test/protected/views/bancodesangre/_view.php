<?php
/* @var $this BancodesangreController */
/* @var $data Bancodesangre */
?>
<div class="row">
	<div class="span4">
		<div class="panel panel-info">
			<div class="panel panel-heading">
				<div class="panel panel-title">
					<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_sangre')); ?>:</b>
					<?php echo CHtml::encode($data->tipo_sangre); ?>
				</div>
			</div>	  
			<div class="panel panel-body">
				<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
				<?php echo CHtml::encode($data->cantidad); ?>
			</div>
		</div>
	</div>
</div>
