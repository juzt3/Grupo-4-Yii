<?php
/* @var $this DonacionmedulaController */
/* @var $model Donacionmedula */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'donacionmedula-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Campos con <span class="required">*</span> son obligatoria.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'rut',array('span'=>5,'maxlength'=>10)); ?>

            <?php echo $form->textFieldControlGroup($model,'cantidad_medula',array('span'=>5)); ?>

            <?php echo $form->textAreaControlGroup($model,'d_medula_observaciones',array('rows'=>6,'span'=>8)); ?>

            <div>
		<?php echo $form->textFieldControlGroup($model,'fecha_donacionmedula',array('value'=>date("d-m-Y"), 'disabled'=>true)); ?>
	    </div>

            <div>
		<?php echo $form->labelEx($model,'fecha_expiracionmedula'); ?>
		<br>
		<div class="input-append date">
			<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			        'attribute' => 'fecha_expiracionmedula',
			        "model"=>$model,
			        'language'=>'es',
			        'options' => array(
			        	'constrainInput'=>true,
			            'dateFormat' => 'dd-mm-yy',
						'changeYear'=>true,
						'autoSize'=>true,
						'yearRange'=>'0:1',
						'minDate'=>'NOW',
						'maxDate'=>'1y',
			        ),
	    		));
			?>
			<span class="add-on"><i class="icon-calendar"></i></span>
		</div>
                <br>
		<?php echo $form->error($model,'fecha_expiracionmedula'); ?>
	</div>

        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->