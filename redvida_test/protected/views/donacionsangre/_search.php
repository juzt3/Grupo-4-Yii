<?php
/* @var $this DonacionsangreController */
/* @var $model Donacionsangre */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_donacionsangre',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'rut',array('span'=>5,'maxlength'=>10)); ?>

                    <?php echo $form->textFieldControlGroup($model,'cantidad_sangre',array('span'=>5)); ?>

                    <?php echo $form->textAreaControlGroup($model,'dsangre_observaciones',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'tipo_sangre',array('span'=>5,'maxlength'=>3)); ?>

                    <?php echo $form->textFieldControlGroup($model,'fecha_donacionsangre',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'fecha_expiracion',array('span'=>5)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->