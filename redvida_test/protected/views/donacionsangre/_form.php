<?php
/* @var $this DonacionsangreController */
/* @var $model Donacionsangre */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'donacionsangre-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'cantidad_sangre',array('value'=>'450', 'disabled'=>true)); ?>

            <?php echo $form->textAreaControlGroup($model,'dsangre_observaciones',array('rows'=>6,'span'=>8)); ?>

            <?php echo $form->textFieldControlGroup($model,'fecha_donacionsangre',array('value'=>date("d-m-Y"), 'disabled'=>true)); ?>
            
            <div>
                <?php echo $form->labelEx($model,'fecha_expiracion'); ?>
                <br>
                <div class="input-append date">
                    <?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
                            'attribute' => 'fecha_expiracion',
                            'language'=>'es',
                            "model"=>$model,
                            'options' => array(
                                'constrainInput'=>true,
                                'dateFormat' => 'dd-mm-yy',
                                'changeYear'=>true,
                                'autoSize'=>true,
                                'minDate'=>-0,
                                'maxDate' => '+1M',
                            ),
                        ));
                    ?>
                    <span class="add-on"><i class="icon-calendar"></i></span>
                </div>
                <br>
                <?php echo $form->error($model,'fecha_expiracion'); ?>
            </div>

        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->