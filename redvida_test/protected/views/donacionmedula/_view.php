<?php
/* @var $this DonacionmedulaController */
/* @var $data Donacionmedula */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rut')); ?>:</b>
	<?php echo CHtml::encode($data->rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad_medula')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad_medula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_medula_observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->d_medula_observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_donacionmedula')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_donacionmedula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_expiracionmedula')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_expiracionmedula); ?>
	<br />


</div>