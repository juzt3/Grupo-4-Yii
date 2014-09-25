<?php
/* @var $this CentrosMedicosController */
/* @var $model CentrosMedicos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_centro_medico'); ?>
		<?php echo $form->textField($model,'cod_centro_medico'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_centro_medico'); ?>
		<?php echo $form->textField($model,'nombre_centro_medico',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contacto'); ?>
		<?php echo $form->textField($model,'contacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'director'); ?>
		<?php echo $form->textField($model,'director',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'especialidad'); ?>
		<?php echo $form->textField($model,'especialidad',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gubernamental'); ?>
		<?php echo $form->textField($model,'gubernamental',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->