<?php
/* @var $this UrgenciasSangreController */
/* @var $model UrgenciasSangre */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'urgencias-sangre-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Los campos con <span class="required">*</span> son obligatorios.</p>

    <?php echo $form->errorSummary($model); ?>

             

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
        <?php echo $form->dropDownListControlGroup($model,'tipo_sangre', $model->getMenuSangre(), array("empty"=>"Seleccionar Tipo de Sangre")); ?>
    </div> 

    <div>
          <?php echo  $form->textFieldControlGroup($model,'cantidad_sangre',array( 'append'=>'Paquetes','help' => 'Indique la cantidad de paquetes de sangre a utilizar (450cc)', 'helpOptions' => array('type' => TbHtml::HELP_TYPE_BLOCK)));?>
    </div>

    <div >
        <?php echo $form->textFieldControlGroup($model,'afiliacion',array('maxlength'=>50, 'placeholder'=>'Ej: Fonasa')); ?>
    </div>


    <div >
        <?php echo $form->dropDownListControlGroup($model,'grado_urgencia',$model->getGradoUrgencia(), array("empty"=>"Seleccione Tipo de Urgencia")); ?>
    </div>

    <div>
            <?php echo $form->textFieldControlGroup($model,'fecha_ini',array('value'=>date("d-m-Y"), 'disabled'=>true)); ?>
    </div>

    <div >
        <?php echo $form->dropDownListControlGroup($model,'id_enfermedad_urgencia', EnfermedadesUrgencia::getEnfermedadesUrgencia(), array("empty"=>"Seleccionar Enfermedad", 'help' => 'Seleccione la enfermedad que inhabilite a la persona de recibir sangre', 'helpOptions' => array('type' => TbHtml::HELP_TYPE_BLOCK)));?>
    </div>

    <div >
        <?php echo $form->dropDownListControlGroup($model,'cod_cm', Centrosmedicos::getCentrosmedicos(), array("empty"=>"Seleccionar Centro Medico"));?>
    </div> 

    <div class="buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class'=>'btn btn-primary')); ?>
    </div>

    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->