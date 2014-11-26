<?php
/* @var $this DonacionmedulaController */
/* @var $model Donacionmedula */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'rut',array('span'=>5,'maxlength'=>10)); ?>

                    <?php echo $form->textAreaControlGroup($model,'d_medula_observaciones',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'fecha_donacionmedula',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'fecha_expiracionmedula',array('span'=>5)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Buscar',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->