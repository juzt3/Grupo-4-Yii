<?php
/* @var $this EnfermedadesController */
/* @var $model Enfermedades */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'enfermedades-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar', array('class'=>'btn btn-primary btn-large')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->