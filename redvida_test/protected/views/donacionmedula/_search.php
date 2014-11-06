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

                    <?php echo $form->textFieldControlGroup($model,'id_donacionmedula',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'cantidad_medula',array('span'=>5)); ?>

                    <?php echo $form->textAreaControlGroup($model,'d_medula_observaciones',array('rows'=>6,'span'=>8)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->