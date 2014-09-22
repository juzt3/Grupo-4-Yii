<?php
/* @var $this DonantesController */
/* @var $model Donantes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'donantes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombres'); ?>
		<?php echo $form->textField($model,'nombres',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellidos'); ?>
		<?php echo $form->textField($model,'apellidos',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'apellidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rut'); ?>
		<?php echo $form->textField($model,'rut',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comuna'); ?>
		<?php echo $form->textField($model,'comuna',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'comuna'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiposangre'); ?>
		<?php echo $form->dropDownList($model,'tiposangre', $model->getMenuSangre(), array("empty"=>"Seleccione")); ?>
		<?php echo $form->error($model,'tiposangre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alergias'); ?>
		<?php echo $form->textArea($model,'alergias',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'alergias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'centromedico'); ?>
		<?php echo $form->textField($model,'centromedico',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'centromedico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'donanteorganos'); ?>
		<?php echo $form->dropDownList($model,'donanteorganos',array('No', 'Si')); ?>
		<?php echo $form->error($model,'donanteorganos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'celular'); ?>
		<?php echo $form->textField($model,'celular',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'celular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'habilitado'); ?>
		<?php echo $form->checkBox($model,'habilitado', array('value'=>'Si', 'uncheckValue'=>'No','checked'=>'checked')); ?>
		<?php echo $form->error($model,'habilitado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->