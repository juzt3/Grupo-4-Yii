<?php
/* @var $this HistorialdonacionsangreController */
/* @var $data Historialdonacionsangre */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id_historialsangre')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_historialsangre),array('view','id'=>$data->id_historialsangre)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_donacionsangre')); ?>:</b>
	<?php echo CHtml::encode($data->id_donacionsangre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rut')); ?>:</b>
	<?php echo CHtml::encode($data->rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_donacionsangre')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_donacionsangre); ?>
	<br />


</div>