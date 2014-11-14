<?php
/* @var $this HistorialdonacionsangreController */
/* @var $model Historialdonacionsangre */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_historialsangre',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_donacionsangre',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'rut',array('span'=>5,'maxlength'=>10)); ?>

                    <?php echo $form->textFieldControlGroup($model,'fecha_donacionsangre',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'fecha_expiracion',array('span'=>5)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->