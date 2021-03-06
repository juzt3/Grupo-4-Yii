<?php
/* @var $this UrgenciasOrganoTerminadaController */
/* @var $model UrgenciasOrganoTerminada */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'urgencias-organo-terminada-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>


    <div >
        <?php echo $form->dropDownListControlGroup($model,'cod_cm', Centrosmedicos::getCentrosmedicos(), array("empty"=>"Seleccionar Centro Medico"));?>
    </div>

    <div >
        <?php echo $form->dropDownListControlGroup($model,'id_organo', Organosdonables::getOrganosdonables(), array("empty"=>"Seleccionar Organo"));?>
    </div>
            
    <div >
        <?php echo $form->dropDownListControlGroup($model,'id_enfermedad_urgencia', EnfermedadesUrgencia::getEnfermedadesUrgencia(), array("empty"=>"Seleccionar Enfermedad"));?>
    </div>        

    <div> 
        <?php echo $form->textFieldControlGroup($model,'rut',array('maxlength'=>100, 'placeholder'=>'Ej: 15876395-6')); ?>
    </div>

            
    <div >
        <?php echo $form->textFieldControlGroup($model,'nombre_paciente',array('maxlength'=>30, 'placeholder'=>'Ej: Eduardo Roberto')); ?>
    </div>

    <div>
        <div class="span3"> 
            <?php echo $form->textFieldControlGroup($model,'apellido_pat',array('maxlength'=>50, 'placeholder'=>'Ej: Rojas')); ?>
        </div>

        <div class='span9 last'>
            <?php echo $form->textFieldControlGroup($model,'apellido_mat',array('maxlength'=>50, 'placeholder'=>'Ej: Beltran')); ?>
        </div>
    </div>

    <div>
            <?php echo $form->textFieldControlGroup($model,'fecha_ini',array('value'=>date("d-m-Y"), 'disabled'=>true)); ?>
    </div>


    <div >
        <?php echo $form->textFieldControlGroup($model,'afiliacion',array('maxlength'=>50, 'placeholder'=>'Ej: Fonasa')); ?>
    </div>

    <div>
        <?php echo $form->textAreaControlGroup($model,'motivo',array('rows'=>6, 'cols'=>50)); ?>
    </div>    

    <div>
          <?php echo $form->textFieldControlGroup($model,'fecha_fin',array('value'=>date("d-m-Y"), 'disabled'=>true)); ?>
    </div>      

    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->