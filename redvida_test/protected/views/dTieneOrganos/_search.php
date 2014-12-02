<?php
/* @var $this DTieneOrganosController */
/* @var $model DTieneOrganos */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_tiene_organos',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'rut',array('span'=>5,'maxlength'=>10)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_organo',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'transplantado',array('span'=>5,'maxlength'=>2)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->