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
	array('label'=>'Deshabilitar Donantes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rut),'confirm'=>'¿Esta seguro de deshabilitar al donante?')),
	array('label'=>'Administrar Donantes', 'url'=>array('admin')),
	array('label'=>'Asignar Enfermedad', 'url'=>array('historialenfermedades/create', 'id'=>$model->rut)),
);
?>

<?php
	$hist_enfermedades = Historialenfermedades::model()->find(array(
													'condition'=>'rut = :rut',
													'params'=>array(':rut'=>$model->rut),
													//'join'=>  'INNER JOIN enfermedades e ON e.idenfermedad = t.idenfermedad',
													));
?>

<h1>Donante: Rut <?php echo $model->rut; ?></h1>

<div class="panel panel-default hidden-xs" style="margin-top:30px;">
				<div class="panel-body">
				<!-- TABS CONTROLS -->
					<ul id="myTab" class="nav nav-tabs nav-justified">
						<li class="active"><a href="#home" data-toggle="tab"> Datos Personales</a></li>
						<li ><a href="#profile" data-toggle="tab"> Enfermedades registradas</a></li>
					</ul>
					<!-- /TABS CONTROLS -->
						<!-- PANES -->
						<div id="myTabContent" class="tab-content">
							<div class="tab-pane fade in active" id="home">
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
										'habilitado',
									),
								)); ?>
							</div>
							<div class="tab-pane fade widget-tags " id="profile">
								<?php echo TbHtml::pills(array(
								    array('label' => 'Asignar Enfermedad', 'url' =>array('historialenfermedades/create', 'id'=>$model->rut)),
								)); ?>
								<?php $this->widget('zii.widgets.CDetailView',array(
								    'htmlOptions' => array(
								        'class' => 'table table-striped table-condensed table-hover',
								    ),
								    'data'=>$hist_enfermedades,
								    'attributes'=>array(
										'fecha',
										'idenfermedad0.nombre',
										'idenfermedad0.descripcion',
									),
								)); ?>
							</div>
						</div>
					</div>
				</div>
