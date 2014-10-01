<?php
/* @var $this UrgenciaController */
/* @var $data Urgencia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rut), array('view', 'id'=>$data->rut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_paciente')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_paciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido_pat')); ?>:</b>
	<?php echo CHtml::encode($data->apellido_pat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido_mat')); ?>:</b>
	<?php echo CHtml::encode($data->apellido_mat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('afiliacion')); ?>:</b>
	<?php echo CHtml::encode($data->afiliacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enfermedad')); ?>:</b>
	<?php echo CHtml::encode($data->enfermedad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grado_urgencia')); ?>:</b>
	<?php echo CHtml::encode($data->grado_urgencia); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('necesidad_transplante')); ?>:</b>
	<?php echo CHtml::encode($data->necesidad_transplante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('centro_medico')); ?>:</b>
	<?php echo CHtml::encode($data->centro_medico); ?>
	<br />

	*/ ?>

</div>