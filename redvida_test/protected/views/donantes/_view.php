<?php
/* @var $this DonantesController */
/* @var $data Donantes */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rut),array('view','id'=>$data->rut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombres')); ?>:</b>
	<?php echo CHtml::encode($data->nombres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellidos')); ?>:</b>
	<?php echo CHtml::encode($data->apellidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comuna')); ?>:</b>
	<?php echo CHtml::encode($data->comuna); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiposangre')); ?>:</b>
	<?php echo CHtml::encode($data->tiposangre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('donanteorganos')); ?>:</b>
	<?php echo CHtml::encode($data->donanteorganos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('celular')); ?>:</b>
	<?php echo CHtml::encode($data->celular); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('alergias')); ?>:</b>
	<?php echo CHtml::encode($data->alergias); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('centromedico')); ?>:</b>
	<?php echo CHtml::encode($data->centromedico); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('habilitado')); ?>:</b>
	<?php echo CHtml::encode($data->habilitado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexo')); ?>:</b>
	<?php echo CHtml::encode($data->sexo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_nac')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_nac); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('afiliacion')); ?>:</b>
	<?php echo CHtml::encode($data->afiliacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('donantemedula')); ?>:</b>
	<?php echo CHtml::encode($data->donantemedula); ?>
	<br />

	*/ ?>

</div>