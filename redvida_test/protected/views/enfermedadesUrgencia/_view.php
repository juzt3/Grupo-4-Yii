<?php
/* @var $this EnfermedadesUrgenciaController */
/* @var $data EnfermedadesUrgencia */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id_enfermedad_urgencia')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_enfermedad_urgencia),array('view','id'=>$data->id_enfermedad_urgencia)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />
	<br>


</div>