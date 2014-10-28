<?php
/* @var $this CentrosmedicosController */
/* @var $model Centrosmedicos */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'centrosmedicos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Los campos con <span class="required">*</span> son obligatorios.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'nombre_cm',array('span'=>5,'maxlength'=>50)); ?>

            <?php echo $form->textFieldControlGroup($model,'direccion_cm',array('span'=>5,'maxlength'=>100)); ?>

            <?php echo $form->textFieldControlGroup($model,'contacto_cm',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'director_cm',array('span'=>5,'maxlength'=>50)); ?>

            <?php echo $form->textFieldControlGroup($model,'especialidad_cm',array('span'=>5,'maxlength'=>50)); ?>

            <?php echo $form->dropDownListControlGroup($model,'gubernamental_cm',array('si'=>'Si', 'no'=>'No'), array('empty'=>'Seleccione Opción'));?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->