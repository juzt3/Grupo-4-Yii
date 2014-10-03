<?php
/* @var $this CentrosMedicosController */
/* @var $data CentrosMedicos */
?>

<div class="view">



	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_centro_medico')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_centro_medico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contacto')); ?>:</b>
	<?php echo CHtml::encode($data->contacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('director')); ?>:</b>
	<?php echo CHtml::encode($data->director); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('especialidad')); ?>:</b>
	<?php echo CHtml::encode($data->especialidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gubernamental')); ?>:</b>
	<?php echo CHtml::encode($data->gubernamental); ?>
	<br />


</div>