<?php
/* @var $this DonantesController */
/* @var $model Donantes */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
                    <?php echo $form->textFieldControlGroup($model,'rut',array('span'=>5,'maxlength'=>10)); ?>

                    <?php echo $form->textFieldControlGroup($model,'nombres',array('span'=>5,'maxlength'=>100)); ?>

                    <?php echo $form->textFieldControlGroup($model,'apellidos',array('span'=>5,'maxlength'=>100)); ?>
                   
                    <?php echo $form->textFieldControlGroup($model,'fecha_nac',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'sexo',array('span'=>5,'maxlength'=>9)); ?>

                    <?php echo $form->textFieldControlGroup($model,'direccion',array('span'=>5,'maxlength'=>300)); ?>

                    <?php echo $form->textFieldControlGroup($model,'comuna',array('span'=>5,'maxlength'=>50)); ?>
                   
                    <?php echo $form->textFieldControlGroup($model,'email',array('span'=>5,'maxlength'=>300)); ?>
                   
                    <?php echo $form->textFieldControlGroup($model,'telefono',array('span'=>5,'maxlength'=>10)); ?>

                    <?php echo $form->textFieldControlGroup($model,'celular',array('span'=>5,'maxlength'=>10)); ?>
                   
                    <?php echo $form->textAreaControlGroup($model,'alergias',array('rows'=>6,'span'=>8)); ?>
                   
                    <?php echo $form->textFieldControlGroup($model,'afiliacion',array('span'=>5,'maxlength'=>100)); ?>
                   
                    <?php echo $form->textFieldControlGroup($model,'centromedico',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'tiposangre',array('span'=>5,'maxlength'=>3)); ?>

                    <?php echo $form->textFieldControlGroup($model,'donanteorganos',array('span'=>5,'maxlength'=>2)); ?>

                    <?php echo $form->textFieldControlGroup($model,'donantemedula',array('span'=>5,'maxlength'=>2)); ?>

                    <?php echo $form->textFieldControlGroup($model,'habilitado',array('span'=>5,'maxlength'=>2)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Buscar',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->