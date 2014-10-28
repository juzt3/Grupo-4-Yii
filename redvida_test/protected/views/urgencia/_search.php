<?php
/* @var $this UrgenciaController */
/* @var $model Urgencia */
/* @var $form TbActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div>
		<?php echo $form->textFieldControlGroup($model,'rut',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div>
		<?php echo $form->textFieldControlGroup($model,'nombre_paciente',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div>
		<?php echo $form->textFieldControlGroup($model,'apellido_pat',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div>
		<?php echo $form->textFieldControlGroup($model,'apellido_mat',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div>
		<?php echo $form->textFieldControlGroup($model,'afiliacion',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div>
		<?php echo $form->textFieldControlGroup($model,'enfermedad',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div>
		<?php echo $form->textFieldControlGroup($model,'grado_urgencia',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div>
		<?php echo $form->textFieldControlGroup($model,'necesidad_transplante',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div>
		<?php echo $form->textFieldControlGroup($model,'centro_medico',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->