<?php
/* @var $this HistorialenfermedadesController */
/* @var $data Historialenfermedades */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idhistorial')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idhistorial), array('view', 'id'=>$data->idhistorial)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rut')); ?>:</b>
	<?php echo CHtml::encode($data->rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idenfermedad')); ?>:</b>
	<?php echo CHtml::encode($data->idenfermedad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />


</div>