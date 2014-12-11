<?php
/* @var $this UsersController */
/* @var $data Users */
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
				<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
                                <?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
			</div>	  
			<div class="panel panel-body">
				
                                <b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
                                <?php echo CHtml::encode($data->username); ?>
                                <br />

                                <b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
                                <?php echo CHtml::encode($data->password); ?>
                                <br />

                                <b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
                                <?php echo CHtml::encode($data->email); ?>
                                <br />
			</div>
		</div>
	</div>
</div>
<br>