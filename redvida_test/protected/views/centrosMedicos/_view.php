<?php
/* @var $this CentrosmedicosController */
/* @var $data Centrosmedicos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_cm')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_cm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_cm')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_cm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contacto_cm')); ?>:</b>
	<?php echo CHtml::encode($data->contacto_cm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('director_cm')); ?>:</b>
	<?php echo CHtml::encode($data->director_cm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('especialidad_cm')); ?>:</b>
	<?php echo CHtml::encode($data->especialidad_cm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gubernamental_cm')); ?>:</b>
	<?php echo CHtml::encode($data->gubernamental_cm); ?>
	<br />


</div>