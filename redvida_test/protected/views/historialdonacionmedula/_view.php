<?php
/* @var $this HistorialdonacionmedulaController */
/* @var $data Historialdonacionmedula */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id_historialmedula')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_historialmedula),array('view','id'=>$data->id_historialmedula)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_donacionmedula')); ?>:</b>
	<?php echo CHtml::encode($data->id_donacionmedula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rut')); ?>:</b>
	<?php echo CHtml::encode($data->rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_donacionmedula')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_donacionmedula); ?>
	<br />


</div>