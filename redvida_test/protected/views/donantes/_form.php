<?php
/* @var $this DonantesController */
/* @var $model Donantes */
/* @var $form TActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'donantes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->textFieldControlGroup($model,'rut',array('maxlength'=>100, 'placeholder'=>'Ej: 15876395-6'));?>
	</div>

	<div>
		<div class='span3'>
			<?php echo $form->textFieldControlGroup($model,'nombres',array('maxlength'=>100, 'placeholder'=>'Ej: Daniel Cristobal'));?>
		</div>
		<div class='span9 last'>
			<?php echo $form->textFieldControlGroup($model,'apellidos',array('maxlength'=>100, 'placeholder'=>'Ej: Valenzuela Salas'));?>
		</div>
	</div>

	<div>
		<?php echo $form->labelEx($model,'fecha_nac'); ?>
		<br>
		<div class="input-append date">
			<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			        'attribute' => 'fecha_nac',
			        "model"=>$model,
			        'options' => array(
			            'format' => 'dd/mm/yyyy',
						'changeYear'=>true,
						'changeYear'=>true,
						'changeMonth'=>true,
						'autoSize'=>true,
						'yearRange'=>'-130:-0',
						'minDate'=>'-130y',
						'maxDate'=>'-0y',
			        ),
	    		));
			?>
			<span class="add-on"><i class="icon-calendar"></i></span>
		</div>
		<br>
		<?php echo $form->error($model,'fecha_nac'); ?>
	</div>

	<div>
		<?php echo $form->dropDownListControlGroup($model,'sexo',array('Masculino'=>'Masculino', 'Femenino'=>'Femenino'), array('empty'=>'Seleccione un Sexo'));?>
	</div>

	<div>
		<div class="span3">
			<?php echo $form->textFieldControlGroup($model,'direccion',array('maxlength'=>300, 'placeholder'=>'Ej: Tucapel 1968')); ?>
		</div>

		<div class='span9 last'>
			<?php echo $form->textFieldControlGroup($model,'comuna',array('maxlength'=>50, 'placeholder'=>'Ej: Concepcion')); ?>
		</div>
	</div>

	<div>
		<?php echo $form->textFieldControlGroup($model,'email',array('maxlength'=>300, 'placeholder'=>'Ej: mimail@servicio.com')); ?>
	</div>

	<div>
		<div class="span3">
			<?php echo $form->textFieldControlGroup($model,'telefono',array('maxlength'=>10, 'placeholder'=>'Ej: 412258763')); ?>
		</div>

		<div class='span9 last'>
			<?php echo $form->textFieldControlGroup($model,'celular',array('maxlength'=>10, 'placeholder'=>'985748553')); ?>
		</div>
	</div>

	<div>
		<?php echo $form->textAreaControlGroup($model,'alergias',array('rows'=>3, 'placeholder'=>'Ej: Medicamentos, Alimentos, Sustancias')); ?>
	</div>

	<div>
		<?php echo $form->textFieldControlGroup($model,'afiliacion',array('maxlength'=>100, 'placeholder'=>'Ej: Fonasa')); ?>
	</div>

	<div>
		<?php echo $form->dropDownListControlGroup($model,'centromedico', Centrosmedicos::getCentrosmedicos(), array("empty"=>"Seleccionar Centro Medico"));?>
	</div>

	<div>
		<?php echo $form->dropDownListControlGroup($model,'tiposangre', $model->getMenuSangre(), array("empty"=>"Seleccionar Tipo de Sangre")); ?>
	</div>

	<div>
		<br>
		<h2>Donante adicional:</h2>
		<p>Por defecto se registra como donante de sangre</p>
	</div>

	<div>
		<div class="span3">
			<?php echo $form->checkBoxControlGroup($model,'donanteorganos',array('checkedValue'=>'Si', 'uncheckValue'=>'No', 'checked'=>false)); ?>
		</div>

		<div class='span9 last'>
			<?php echo $form->checkBoxControlGroup($model,'donantemedula',array('checkedValue'=>'Si', 'uncheckValue'=>'No', 'checked'=>false)); ?>
		</div>
	</div>
	
	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->