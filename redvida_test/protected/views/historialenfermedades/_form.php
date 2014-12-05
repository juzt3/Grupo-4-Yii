<?php
/* @var $this HistorialenfermedadesController */
/* @var $model Historialenfermedades */
/* @var $form TbActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'historialenfermedades-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<!--
	<div class="row">
		<?php echo $form->labelEx($model,'rut'); ?>
		<?php echo $form->textField($model,'rut',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'rut'); ?>
	</div>
	-->

	<div>
		<?php echo $form->textFieldControlGroup($model,'fecha',array('value'=>date("d-m-Y"), 'disabled'=>true)); ?>
	</div>

	<div>
		<?php echo $form->dropDownListControlGroup($model, 'idenfermedad', Enfermedades::getEnfermedades($id), array("empty"=>"Seleccione una enfermedad")); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar', array('class'=>'btn btn-primary btn-large')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->