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

    <p class="help-block">Campos con <span class="required">*</span> son obligatorios.</p>

    <?php echo $form->errorSummary($model); ?>

        <div>
        	<?php echo $form->textFieldControlGroup($model,'cantidad_medula',array('append'=>'CC')); ?>
        </div>

        <?php echo $form->textAreaControlGroup($model,'d_medula_observaciones',array('rows'=>5,'span'=>5)); ?>

        <div>
			<?php echo $form->textFieldControlGroup($model,'fecha_donacionmedula',array('value'=>date("d-m-Y"), 'disabled'=>true)); ?>
	    </div>

        <div>
			<?php echo $form->labelEx($model,'fecha_expiracionmedula'); ?>
			<div class="input-append date">
				<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
				        'attribute' => 'fecha_expiracionmedula',
				        'language'=>'es',
				        "model"=>$model,
				        'options' => array(
				        	'constrainInput'=>true,
	                        'dateFormat' => 'dd-mm-yy',
							'autoSize'=>true,
							'yearRange'=>'0:1',
							'minDate'=>'NOW',
							'maxDate'=>'1y',
				        ),
		    		));
				?>
				<span class="add-on"><i class="icon-calendar"></i></span>
			</div>
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