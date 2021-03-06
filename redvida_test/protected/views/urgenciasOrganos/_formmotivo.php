<?php
/* @var $this UrgenciasOrganoController */
/* @var $model UrgenciasOrgano */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'urgencias-organo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Campos con <span class="required">*</span> son obligatorios.</p>

    <?php echo $form->errorSummary($model); ?>       

    <div> 
        <?php echo $form->textAreaControlGroup($model,'motivo',array('rows'=>6, 'cols'=>50)); ?>
    </div>

    <div>
        <?php echo $form->radioButtonListControlGroup($organo,'rut', DTieneOrganos::getOrganosDisponibles($model->id_organo), array('label'=>'Organos Donables', 'multiple' => false)); ?>
    </div>

    <div class="buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class'=>'btn btn-primary')); ?>
    </div>

</div>

    <?php $this->endWidget(); ?>

</div><!-- form -->