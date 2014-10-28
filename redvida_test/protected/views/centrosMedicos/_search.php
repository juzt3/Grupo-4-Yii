<?php
/* @var $this CentrosmedicosController */
/* @var $model Centrosmedicos */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'nombre_cm',array('span'=>5,'maxlength'=>50)); ?>

                    <?php echo $form->textFieldControlGroup($model,'direccion_cm',array('span'=>5,'maxlength'=>100)); ?>

                    <?php echo $form->textFieldControlGroup($model,'contacto_cm',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'director_cm',array('span'=>5,'maxlength'=>50)); ?>

                    <?php echo $form->textFieldControlGroup($model,'especialidad_cm',array('span'=>5,'maxlength'=>50)); ?>

<!--                    <?php echo $form->textFieldControlGroup($model,'gubernamental_cm',array('span'=>5,'maxlength'=>50)); ?>-->

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->