<?php
/* @var $this DonacionmedulaController */
/* @var $data Donacionmedula */
?>
<style>
.panel{
	margin-bottom: 0px;
}
</style>

<div class="row-fluid">
	<div class="span4">
		<div class="panel panel-info">
			<div class="panel panel-heading">
				<b>Donación de Medula</b>
	
			</div>	  
			<div class="panel panel-body">
                                <b><?php echo CHtml::encode($data->getAttributeLabel('id_donacionmedula')); ?>:</b>
				<?php echo CHtml::link(CHtml::encode($data->id_donacionmedula),array('view','id'=>$data->id_donacionmedula)); ?>
				<br>
				<b><?php echo CHtml::encode($data->getAttributeLabel('rut')); ?>:</b>
				<?php echo CHtml::encode($data->rut); ?>
				<br>
				<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad_medula')); ?>:</b>
				<?php echo CHtml::encode($data->cantidad_medula); ?><span> cc</span>
				<br>
				<b><?php echo CHtml::encode($data->getAttributeLabel('d_medula_observaciones')); ?>:</b>
				<?php echo CHtml::encode($data->d_medula_observaciones); ?>
				<br>
				<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_donacionmedula')); ?>:</b>
				<?php echo CHtml::encode($data->fecha_donacionmedula); ?>
				<br>
				<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_expiracionmedula')); ?>:</b>
				<?php echo CHtml::encode($data->fecha_expiracionmedula); ?>
			</div>
		</div>
	</div>
</div>
<br>
