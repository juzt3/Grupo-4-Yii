<?php
/* @var $this UrgenciasOrganoTerminadaController */
/* @var $data UrgenciasOrganoTerminada */
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
				<b><?php echo CHtml::encode($data->getAttributeLabel('id_urgencia_organo')); ?>:</b>
                                   <?php echo CHtml::link(CHtml::encode($data->id_urgencia_organo),array('view','id'=>$data->id_urgencia_organo)); ?>
			</div>	  
			<div class="panel panel-body">

                        <b><?php echo CHtml::encode($data->getAttributeLabel('cod_cm')); ?>:</b>
                        <?php echo CHtml::encode($data->cod_cm); ?>
                        <br />

                        <b><?php echo CHtml::encode($data->getAttributeLabel('id_organo')); ?>:</b>
                        <?php echo CHtml::encode($data->id_organo); ?>
                        <br />

                        <b><?php echo CHtml::encode($data->getAttributeLabel('rut')); ?>:</b>
                        <?php echo CHtml::encode($data->rut); ?>
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

                        <?php /*
                        <b><?php echo CHtml::encode($data->getAttributeLabel('afiliacion')); ?>:</b>
                        <?php echo CHtml::encode($data->afiliacion); ?>
                        <br />

                        <b><?php echo CHtml::encode($data->getAttributeLabel('grado_urgencia')); ?>:</b>
                        <?php echo CHtml::encode($data->grado_urgencia); ?>
                        <br />

                        <b><?php echo CHtml::encode($data->getAttributeLabel('fecha_ini')); ?>:</b>
                        <?php echo CHtml::encode($data->fecha_ini); ?>
                        <br />

                        <b><?php echo CHtml::encode($data->getAttributeLabel('fecha_fin')); ?>:</b>
                        <?php echo CHtml::encode($data->fecha_fin); ?>
                        <br />

                        <b><?php echo CHtml::encode($data->getAttributeLabel('motivo')); ?>:</b>
                        <?php echo CHtml::encode($data->motivo); ?>
                        <br />

                        */ ?>


			</div>
		</div>
	</div>
</div>
<br>



<div class="view">

    	

</div>