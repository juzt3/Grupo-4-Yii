<?php
/* @var $this OrganosDonablesController */
/* @var $data OrganosDonables */
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
				<b><?php echo CHtml::encode($data->getAttributeLabel('id_organo')); ?>:</b>
                                <?php echo CHtml::link(CHtml::encode($data->id_organo),array('view','id'=>$data->id_organo)); ?>
                                <br />
			</div>	  
			<div class="panel panel-body">
				
                                <b><?php echo CHtml::encode($data->getAttributeLabel('nombre_organo')); ?>:</b>
                                <?php echo CHtml::encode($data->nombre_organo); ?>
                                <br />

                                <b><?php echo CHtml::encode($data->getAttributeLabel('horas_duracion')); ?>:</b>
                                <?php echo CHtml::encode($data->horas_duracion); ?>
                                <br />

			</div>
		</div>
	</div>
</div>
<br>
