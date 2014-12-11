<?php
/* @var $this DTieneOrganosController */
/* @var $data DTieneOrganos */
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
				<b><?php echo CHtml::encode($data->getAttributeLabel('id_tiene_organos')); ?>:</b>
                                   <?php echo CHtml::link(CHtml::encode($data->id_tiene_organos),array('view','id'=>$data->id_tiene_organos)); ?>
                                <br />
			</div>	  
			<div class="panel panel-body">

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
		</div>
	</div>
</div>
<br>
