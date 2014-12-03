<?php
/* @var $this UrgenciasOrganoTerminadaController */
/* @var $model UrgenciasOrganoTerminada */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_urgencia_organo',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'cod_cm',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id_organo',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'rut',array('span'=>5,'maxlength'=>10)); ?>

                    <?php echo $form->textFieldControlGroup($model,'nombre_paciente',array('span'=>5,'maxlength'=>30)); ?>

                    <?php echo $form->textFieldControlGroup($model,'apellido_pat',array('span'=>5,'maxlength'=>50)); ?>

                    <?php echo $form->textFieldControlGroup($model,'apellido_mat',array('span'=>5,'maxlength'=>50)); ?>

                    <?php echo $form->textFieldControlGroup($model,'afiliacion',array('span'=>5,'maxlength'=>50)); ?>

                    <?php echo $form->textFieldControlGroup($model,'grado_urgencia',array('span'=>5,'maxlength'=>1)); ?>

                    <?php echo $form->textFieldControlGroup($model,'fecha_ini',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'fecha_fin',array('span'=>5)); ?>

                    <?php echo $form->textAreaControlGroup($model,'motivo',array('rows'=>6,'span'=>8)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->