<?php
/* @var $this UrgenciasSangreController */
/* @var $model UrgenciasSangre */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_urgencia_sangre',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'cod_cm',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_enfermedad_urgencia',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'rut',array('span'=>5,'maxlength'=>10)); ?>

                    <?php echo $form->textFieldControlGroup($model,'nombre_paciente',array('span'=>5,'maxlength'=>30)); ?>

                    <?php echo $form->textFieldControlGroup($model,'apellido_pat',array('span'=>5,'maxlength'=>50)); ?>

                    <?php echo $form->textFieldControlGroup($model,'apellido_mat',array('span'=>5,'maxlength'=>50)); ?>

                    <?php echo $form->textFieldControlGroup($model,'afiliacion',array('span'=>5,'maxlength'=>50)); ?>

                    <?php echo $form->textFieldControlGroup($model,'grado_urgencia',array('span'=>5,'maxlength'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'tipo_sangre',array('span'=>5,'maxlength'=>3)); ?>

                    <?php echo $form->textFieldControlGroup($model,'cantidad_sangre',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'fecha_ini',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'fecha_fin',array('span'=>5)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->