<?php
/* @var $this CentrosmedicosController */
/* @var $model Centrosmedicos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Nombre Centro Medico'); ?>
		<?php echo $form->textField($model,'nombre_cm',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Direccion'); ?>
		<?php echo $form->textField($model,'direccion_cm',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nro Contacto'); ?>
		<?php echo $form->textField($model,'contacto_cm'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Director'); ?>
		<?php echo $form->textField($model,'director_cm',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Especialidad'); ?>
		<?php echo $form->textField($model,'especialidad_cm',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Gubernamental'); ?>
		<?php echo $form->textField($model,'gubernamental_cm',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->