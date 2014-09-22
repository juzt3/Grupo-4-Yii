<?php
/* @var $this EnfermedadesController */
/* @var $data Enfermedades */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idenfermedad')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idenfermedad), array('view', 'id'=>$data->idenfermedad)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>