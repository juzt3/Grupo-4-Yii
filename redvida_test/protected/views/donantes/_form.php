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

	<p class="note">Los sampos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rut'); ?>
		<?php echo $form->textField($model,'rut',array('size'=>30,'maxlength'=>10, 'placeholder'=>'Ej: 15876395-6')); ?>
		<?php echo $form->error($model,'rut'); ?>
	</div>

	<div class="row">
		<span class="span-7">
			<?php echo $form->labelEx($model,'nombres'); ?>
			<?php echo $form->textField($model,'nombres',array('size'=>30,'maxlength'=>100, 'placeholder'=>'Ej: Daniel Cristobal')); ?>
			<?php echo $form->error($model,'nombres'); ?>
		</span>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellidos'); ?>
		<?php echo $form->textField($model,'apellidos',array('size'=>30,'maxlength'=>100, 'placeholder'=>'Ej: Valenzuela Salas')); ?>
		<?php echo $form->error($model,'apellidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_nac'); ?>
		<?php $form->widget("zii.widgets.jui.CJuiDatePicker",array(
				"attribute"=>"fecha_nac",
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
				'htmlOptions'=>array('style'=>'width:206px;')
			)); 
		?>
		<?php echo $form->error($model,'fecha_nac'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sexo'); ?>
		<?php echo $form->dropDownList($model,'sexo',array('Masculino'=>'Masculino', 'Femenino'=>'Femenino'), array('empty'=>'Seleccione un Sexo', 'style'=>'width:240px')); ?>
		<?php echo $form->error($model,'sexo'); ?>
	</div>

	<div class="row">
		<span class="span-7">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>30,'maxlength'=>300, 'placeholder'=>'Ej: Tucapel 1968')); ?>
		<?php echo $form->error($model,'direccion'); ?>
		</span>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comuna'); ?>
		<?php echo $form->textField($model,'comuna',array('size'=>30,'maxlength'=>50, 'placeholder'=>'Ej: Concepcion')); ?>
		<?php echo $form->error($model,'comuna'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>300, 'placeholder'=>'Ej: mimail@sericio.com')); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<span class="span-7">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>30,'maxlength'=>10, 'placeholder'=>'Ej: 412258763')); ?>
		<?php echo $form->error($model,'telefono'); ?>
		</span>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'celular'); ?>
		<?php echo $form->textField($model,'celular',array('size'=>30,'maxlength'=>10, 'placeholder'=>'985748553')); ?>
		<?php echo $form->error($model,'celular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alergias'); ?>
		<?php echo $form->textArea($model,'alergias',array('rows'=>5, 'cols'=>61, 'placeholder'=>'Ej: Medicamentos, Alimentos, Sustancias')); ?>
		<?php echo $form->error($model,'alergias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'afiliacion'); ?>
		<?php echo $form->textField($model,'afiliacion',array('size'=>30,'maxlength'=>100, 'placeholder'=>'Fonasa')); ?>
		<?php echo $form->error($model,'afiliacion'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'centromedico'); ?>
		<?php echo $form->dropDownList($model,'centromedico', Centrosmedicos::getCentrosmedicos(), array("empty"=>"Seleccione un Centro Medico", 'style'=>'width:240px'));?>
		<?php echo $form->error($model,'centromedico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiposangre'); ?>
		<?php echo $form->dropDownList($model,'tiposangre', $model->getMenuSangre(), array("empty"=>"Seleccione un Tipo de Sangre", 'style'=>'width:240px')); ?>
		<?php echo $form->error($model,'tiposangre'); ?>
	</div>

	<div>
		<br>
		<h4>Donante adicional:</h4>
	</div>

	<div class="row">
		<span class="span-7">
			<?php echo $form->labelEx($model,'donanteorganos', array('style'=>'display:inline')); ?>
			<?php echo $form->checkBox($model,'donanteorganos',array('checkedValue'=>'Si', 'uncheckValue'=>'No', 'checked'=>false)); ?>
			<?php echo $form->error($model,'donanteorganos'); ?>
		</span>

			<?php echo $form->labelEx($model,'donantemedula', array('style'=>'display:inline')); ?>
			<?php echo $form->checkBox($model,'donantemedula',array('checkedValue'=>'Si', 'uncheckValue'=>'No', 'checked'=>false)); ?>
			<?php echo $form->error($model,'donantemedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'habilitado', array('style'=>'display:inline')); ?>
		<?php echo $form->checkBox($model,'habilitado', array('checkedValue'=>'Si', 'uncheckValue'=>'No', 'checked'=>'checked')); ?>
		<?php echo $form->error($model,'habilitado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->