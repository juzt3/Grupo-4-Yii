<?php
/* @var $this EnfermedadesUrgenciaController */
/* @var $data EnfermedadesUrgencia */
?>

<style>
.panel{
	margin-bottom: 0px;
}
</style>

<div class="row-fluid">
	<div class="span5">
		<div class="panel panel-info">
			<div class="panel panel-heading">
				<b><?php echo CHtml::encode($data->getAttributeLabel('id_enfermedad_urgencia')); ?>:</b>
                                   <?php echo CHtml::link(CHtml::encode($data->id_enfermedad_urgencia),array('view','id'=>$data->id_enfermedad_urgencia)); ?>
                                <br />
			</div>	  
			<div class="panel panel-body">

                        <b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
                        <?php echo CHtml::encode($data->nombre); ?>
                        <br />

                        <b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
                        <?php echo CHtml::encode($data->descripcion); ?>
                        <br />
                        <br>

			</div>
		</div>
	</div>
</div>
<br>
