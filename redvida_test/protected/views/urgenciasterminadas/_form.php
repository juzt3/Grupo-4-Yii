<?php
/* @var $this UrgenciasterminadasController */
/* @var $model Urgenciasterminadas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'urgenciasterminadas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rut'); ?>
		<?php echo $form->textField($model,'rut',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_paciente'); ?>
		<?php echo $form->textField($model,'nombre_paciente',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nombre_paciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido_pat'); ?>
		<?php echo $form->textField($model,'apellido_pat',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'apellido_pat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido_mat'); ?>
		<?php echo $form->textField($model,'apellido_mat',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'apellido_mat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'afiliacion'); ?>
		<?php echo $form->textField($model,'afiliacion',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'afiliacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'enfermedad'); ?>
		<?php echo $form->textField($model,'enfermedad',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'enfermedad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grado_urgencia'); ?>
		<?php echo $form->textField($model,'grado_urgencia',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'grado_urgencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'necesidad_transplante'); ?>
		<?php echo $form->textField($model,'necesidad_transplante',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'necesidad_transplante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_ini'); ?>
		<?php echo $form->textField($model,'fecha_ini'); ?>
		<?php echo $form->error($model,'fecha_ini'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_fin'); ?>
		<?php echo $form->textField($model,'fecha_fin'); ?>
		<?php echo $form->error($model,'fecha_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'centro_medico'); ?>
		<?php echo $form->textField($model,'centro_medico'); ?>
		<?php echo $form->error($model,'centro_medico'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->