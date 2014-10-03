<?php
/* @var $this CentrosmedicosController */
/* @var $model Centrosmedicos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'centrosmedicos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_cm'); ?>
		<?php echo $form->textField($model,'nombre_cm',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre_cm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Direccion'); ?>
		<?php echo $form->textField($model,'direccion_cm',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'direccion_cm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nro Contacto'); ?>
		<?php echo $form->textField($model,'contacto_cm'); ?>
		<?php echo $form->error($model,'contacto_cm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Director'); ?>
		<?php echo $form->textField($model,'director_cm',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'director_cm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Especialidad'); ?>
		<?php echo $form->textField($model,'especialidad_cm',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'especialidad_cm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Gubernamental'); ?>
		<?php echo $form->dropDownLIst($model,'gubernamental_cm',array("Si"=>"Si","No"=>"No")); ?>
		<?php echo $form->error($model,'gubernamental_cm'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->