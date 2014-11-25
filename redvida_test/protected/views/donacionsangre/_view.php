<?php
/* @var $this DonacionsangreController */
/* @var $data Donacionsangre */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id_donacionsangre')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_donacionsangre),array('view','id'=>$data->id_donacionsangre)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rut')); ?>:</b>
	<?php echo CHtml::encode($data->rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad_sangre')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad_sangre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dsangre_observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->dsangre_observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_sangre')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_sangre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_donacionsangre')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_donacionsangre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_expiracion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_expiracion); ?>
	<br />


</div>