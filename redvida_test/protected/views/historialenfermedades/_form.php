<?php
/* @var $this HistorialenfermedadesController */
/* @var $model Historialenfermedades */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
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

	<div class="row">
		<?php echo $form->labelEx($model,'idenfermedad'); ?>
		<?php echo $form->dropDownlist($model, 'idenfermedad', Enfermedades::getEnfermedades($id), array("empty"=>"Seleccione una enfermedad")); ?>
		<?php echo $form->error($model,'idenfermedad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php $form->widget("zii.widgets.jui.CJuiDatePicker",array(
				"attribute"=>"fecha",
				"model"=>$model,
				"language"=>"es",
				"options"=>array(
					"dateFormat"=>"dd-mm-yy",
					'showButtonPanel'=>true,
					'changeYear'=>true,
					'yearRange'=>'-130:-0',
					'minDate'=>'-130Y',
					'maxDate'=>'-0Y',
				),
				//'htmlOptions'=>array('style'=>'width:206px;')
			));
		?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->