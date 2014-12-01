<?php
/* @var $this DonantesController */
/* @var $model Donantes */
?>

<?php
$this->breadcrumbs=array(
	'Donantes'=>array('index'),
	$model->rut,
);

$this->menu=array(
	array('label'=>'Lista de Donantes', 'url'=>array('index')),
	array('label'=>'Registrar Donantes', 'url'=>array('create')),
	array('label'=>'Modificar Donantes', 'url'=>array('update', 'id'=>$model->rut)),
);
?>

<h1>Donante: Rut <?php echo $model->rut; ?></h1>

<div class="panel panel-default hidden-xs" style="margin-top:30px;">
				<div class="panel-body">
				<!-- TABS CONTROLS -->
					<ul id="myTab" class="nav nav-tabs nav-justified">
						<li class="active"><a href="#datos" data-toggle="tab"> Datos Personales</a></li>
						<li ><a href="#enfermedades" data-toggle="tab"> Enfermedades Registradas</a></li>
						<li ><a href="#donacionessangre" data-toggle="tab"> Donaciones de Sangre</a></li>
						<li ><a href="#donacionesmedula" data-toggle="tab"> Donaciones de Medula</a></li>
					</ul>
					<!-- /TABS CONTROLS -->
						<!-- PANES -->
						<div id="myTabContent" class="tab-content">
							<div class="tab-pane fade in active" id="datos">
								<?php if($model->fecha_muerte === NULL || $model->habilitado === 'Si'){
										echo TbHtml::pills(array(
									    	array('label'=>'Registrar Muerte', 'url'=>'#', 'linkOptions'=>array('submit'=>array('setdead','id'=>$model->rut),'confirm'=>'La fecha de muerte sera registrada al dia actual ¿Esta seguro de registrar esta muerte?')),
									    	array('label'=>'Deshabilitar/Activar Donante', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rut),'confirm'=>'¿Esta seguro de deshabilitar al donante?')),
										));
								}
								 ?>
								<?php $this->widget('zii.widgets.CDetailView',array(
								    'htmlOptions' => array(
								        'class' => 'table table-striped table-condensed table-hover',
								    ),
								    'data'=>$model,
								    'attributes'=>array(
										'rut',
										'nombres',
										'apellidos',
										'fecha_nac',
										'sexo',
										'direccion',
										'comuna',
										'email',
										'telefono',
										'celular',
										'alergias',
										'afiliacion',
										'centromedico0.nombre_cm',
										'tiposangre',
										'donanteorganos',
										'donantemedula',
										'fecha_muerte',
										'habilitado',
									),
								)); ?>
							</div>
							<div class="tab-pane fade widget-tags " id="enfermedades">
								<?php echo TbHtml::pills(array(
								    array('label' => 'Asignar Enfermedad', 'url' =>array('historialenfermedades/create', 'id'=>$model->rut)),
								)); ?>
								<?php
								 $this->widget('bootstrap.widgets.TbGridView',array(
								    'htmlOptions' => array(
								        'class' => 'table table-striped table-condensed table-hover',
								    ),
								    'dataProvider'=>Historialenfermedades::model()->searchByRut($model->rut),
								    'columns'=>array(
										'fecha',
										'idenfermedad0.nombre',
										'idenfermedad0.descripcion',
										'fecha_cura',
									),
								)); 
								?>
							</div>
							<div class="tab-pane fade widget-tags " id="donacionessangre">
								<?php 
									if($model->habilitado === 'Si'){
										echo TbHtml::pills(array(
									    	array('label'=>'Donar Sangre', 'url'=>array('donacionsangre/create', 'id'=>$model->rut)),//CAMBIAR EL LINK
										));
									}
								?>
								<?php
									 $this->widget('bootstrap.widgets.TbGridView',array(
									 	'htmlOptions' => array(
								        'class' => 'table table-striped table-condensed table-hover',
								    	),
									    'dataProvider'=>Donacionsangre::model()->searchByRut($model->rut),
									    'columns'=>array(
											'fecha_donacionsangre',
											'dsangre_observaciones',
										),
									)); 
								?>
							</div>
							<div class="tab-pane fade widget-tags " id="donacionesmedula">
								<?php
									if($model->habilitado === 'Si' && $model->donantemedula === 'Si'){
										echo TbHtml::pills(array(
										    array('label'=>'Donar Medula', 'url'=>array('donacionmedula/create', 'id'=>$model->rut)),//CAMBIAR EL LINK
											));
										} 
								?>
								<?php
								 $this->widget('bootstrap.widgets.TbGridView',array(
								    'htmlOptions' => array(
								        'class' => 'table table-striped table-condensed table-hover',
								    ),
								    'dataProvider'=>Donacionmedula::model()->searchByRut($model->rut),
								    'columns'=>array(
										'fecha_donacionmedula',
										'd_medula_observaciones',
									),
								)); 
								?>
							</div>
						</div>
					</div>
				</div>
