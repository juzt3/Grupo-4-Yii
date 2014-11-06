<?php
/* @var $this DonacionmedulaController */
/* @var $data Donacionmedula */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id_donacionmedula')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_donacionmedula),array('view','id'=>$data->id_donacionmedula)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad_medula')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad_medula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_medula_observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->d_medula_observaciones); ?>
	<br />


</div>