<?php
/* @var $this HistorialenfermedadesController */
/* @var $model Historialenfermedades */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div>
		<?php echo $form->label($model,'idhistorial'); ?>
		<?php echo $form->textField($model,'idhistorial'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'rut'); ?>
		<?php echo $form->textField($model,'rut',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'idenfermedad'); ?>
		<?php echo $form->textField($model,'idenfermedad'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div>
        <?php echo TbHtml::submitButton('Buscar',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->