<?php
/* @var $this OrganosDonablesController */
/* @var $data OrganosDonables */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id_organo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_organo),array('view','id'=>$data->id_organo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_organo')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_organo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horas_duracion')); ?>:</b>
	<?php echo CHtml::encode($data->horas_duracion); ?>
	<br />


</div>