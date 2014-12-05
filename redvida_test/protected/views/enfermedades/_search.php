<?php
/* @var $this EnfermedadesController */
/* @var $model Enfermedades */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div>
		<?php echo $form->label($model,'idenfermedad'); ?>
		<?php echo $form->textField($model,'idenfermedad'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div>
        <?php echo TbHtml::submitButton('Buscar',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->