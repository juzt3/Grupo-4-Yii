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

    <p class="help-block">Los campos con <span class="required">*</span> son obligatorios.</p>

    <?php echo $form->errorSummary(array($donacion, $historial)); ?>

            <?php echo $form->textFieldControlGroup($donacion,'cantidad_sangre',array('value'=>'450', 'disabled'=>true)); ?>
           
            <?php echo $form->textAreaControlGroup($donacion,'dsangre_observaciones',array('rows'=>6,'span'=>8)); ?>
     
        <!-- Esta parte es del historial-->

            <div>
                <?php echo $form->labelEx($historial,'fecha_expiracion'); ?>
                <br>
                <div class="input-append date">
                    <?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
                            'attribute' => 'fecha_expiracion',
                            "model"=>$historial,
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
                <?php echo $form->error($historial,'fecha_expiracion'); ?>
            </div>

        <div class="form-actions">
        <?php echo TbHtml::submitButton($donacion->isNewRecord ? 'Registrar' : 'Guardad',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->