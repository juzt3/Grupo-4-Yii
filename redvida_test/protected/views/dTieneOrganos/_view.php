<?php
/* @var $this DTieneOrganosController */
/* @var $data DTieneOrganos */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tiene_organos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tiene_organos),array('view','id'=>$data->id_tiene_organos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rut')); ?>:</b>
	<?php echo CHtml::encode($data->rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_organo')); ?>:</b>
	<?php echo CHtml::encode($data->id_organo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transplantado')); ?>:</b>
	<?php echo CHtml::encode($data->transplantado); ?>
	<br />
	<br>


</div>