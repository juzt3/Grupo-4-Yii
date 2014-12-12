<!DOCTYPE html>
<!-- saved from url http://www.bootstraptor.com ##########################################################################
Don't remove this attribution!
This template build on Bootstrap 3 Developer  Kit v.3.0. by @Bootstraptor
Built with Bootstrap 3.0.  version/ part of Bootstraptor KIT
Read usage license on for this template on http://www.bootstraptor.com 
##########################################################################
-->
<html lang="es">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>REDVIDA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
<!-- Le styles -->
<!-- Latest compiled and minified CSS BS 3.0. -->
<link href="<?php echo Yii::app()->baseUrl; ?>/css/custom.css" rel="stylesheet">
<!--*<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/bootstrap-theme.css" rel="stylesheet">-->
<!--*<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/bootstrap-navy-flat-theme.css" rel="stylesheet">-->
<!-- GOOGLE FONT-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700italic,700,500&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<!-- /GOOGLE FONT-->

<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
<!--[if lt IE 7]>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome-ie7.min.css" rel="stylesheet">
	<![endif]-->

<?php Yii::app()->bootstrap->register(); ?>

<style type="text/css">
      body { 
      	padding-top: 40px; 
      }
	@media screen and (max-width: 768px) {
    	body { padding-top: 0px;
    	}
	}
	.hero-unit{
		background:#358cce;
		color:#fff;
	  }
	  
	  footer{
		margin-top:30px;
		display:block;
	  }
	  .thumbnail{
		margin-bottom:30px;
	  }
	  .thumbnail img{
		min-width:100%;
		width:100%;
	  }
	  
	  .nav-tabs{
		margin-bottom: 15px;
	}

    </style>




<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
    <![endif]-->
<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/ico/apple-touch-icon-57-precomposed.png">

  <body>


			<?php $this->widget('bootstrap.widgets.TbNavbar',array(
				'color'=>'inverse',
				'brandLabel'=>'REDVIDA',
				'collapse' => true,
				'items'=>array(
					array(
						'class'=>'bootstrap.widgets.TbNav',
						'encodeLabel' => false,
						'items'=>array(
							array('label'=>'<i class="icon icon-home"></i><span> Inicio</span>', 'url'=>array('/site/index')),
							array('label' => 'Donantes', 'items' => array(
								array('label'=>'Donantes Habilitados', 'url'=>array('/donantes')),
								array('label'=>'Donantes Muertos','url'=>array('/donantes/Indexmuertos')),
								array('label'=>'Donantes Desactivados','url'=>array('/donantes/Indexdesactivados')),
							)),
							array('label'=>'Urgencias', 'items' => array(
								array('label' => 'Urgencias Sangre', 'url' => array('/urgenciasSangre')),
								array('label' => 'Urgencias Organos', 'url' => array('/urgenciasOrganos')),
								array('label' => 'Urgencias Medula', 'url' => array('/urgenciasMedula')),
								)),
							array('label' => 'Donaciones', 'items' => array(
								array('label' => 'Donación Sangre', 'url' => array('/donacionsangre')),
								array('label' => 'Donación Medula', 'url' => array('/donacionmedula')),
							),'visible'=>!Yii::app()->user->isGuest),
							array('label'=>'Banco de Sangre', 'url'=>array('/bancodesangre')),
							array('label'=>'Organos Disponibles', 'url'=>array('/dTieneOrganos')),
							array('label' => 'Administrar', 'items' => array(
								array('label'=>'Enfermedades de Donantes', 'url'=>array('/enfermedades')),
								array('label'=>'Enfermedades de Urgencias', 'url'=>array('/enfermedadesUrgencia')),
								array('label'=>'Centros Medicos', 'url'=>array('/centrosMedicos')),
								array('label' => 'Organos Donables', 'url'=>array('/organosDonables')),
								array('label' => 'Usuarios', 'url'=>array('/users')),
							),'visible'=>!Yii::app()->user->isGuest),
							array('label'=>'Enfermedades Inhabilitantes', 'url'=>array('/enfermedades'),'visible'=>Yii::app()->user->isGuest),
							array('label'=>'Ingresar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
							array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
						),
					)
			),
		)); ?>

<div class="container">
	<div class="row-fluid">
		<div class="span12"><br>
			<?php if(isset($this->breadcrumbs)):?>
				<?php $this->widget('bootstrap.widgets.TbBreadcrumb', array(
					'links'=>$this->breadcrumbs,
				)); ?><!-- breadcrumbs -->
			<?php endif?>
		</div>
	</div>
</div>
</div><!-- mainmenu -->
    
<?php echo $content; ?>


<hr>
<!-- FOOTER-->
<!-- FOOTER-->
<!--
	<div class="row">
      <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
        <h4 class="line3 center standart-h4title"><span>Navigation</span></h4>
        <ul class="footer-links">
          <li><a href="#">Home</a></li>
          <li><a href="#">project</a></li>
          <li><a href="#">Elements</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Blog</a></li>
        </ul>
      </div>
	  
    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
        <h4 class="line3 center standart-h4title"><span>Useful Links</span></h4>
        <ul class="footer-links">
          <li><a href="http://www.bootstraptor.com">Bootstraptor.com</a></li>
          <li><a href="http://www.bootstraptor.com">Bootstraptor.com</a></li>
         <li><a href="http://www.bootstraptor.com">Bootstraptor.com</a></li>
         <li><a href="http://www.bootstraptor.com">Bootstraptor.com</a></li>
         <li><a href="http://www.bootstraptor.com">Bootstrap templates</a></li>
        </ul>
    </div> 
	  
	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
        <h4 class="line3 center standart-h4title"><span>Useful Links</span></h4>
        <ul class="footer-links">
          <li><a href="http://www.bootstraptor.com">Bootstraptor.com</a></li>
          <li><a href="http://www.bootstraptor.com">Bootstraptor.com</a></li>
		<li><a href="http://www.bootstraptor.com">Bootstraptor.com</a></li>
         <li><a href="http://www.bootstraptor.com">Bootstraptor.com</a></li>
         <li><a href="http://www.bootstraptor.com">Bootstrap templates</a></li>
        </ul>
    </div>
	
    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
        <h4 class="line3 center standart-h4title"><span>Nuestra Oficina</span></h4>
		<address>
			<strong>Grupo 4 UBB, LLC.</strong><br>
			<i class="icon-map-marker"></i>  Av. Collao 1202, Casilla 5-C, Concepción 4051381,<br>
		    Region del Bio-bio<br>
			<i class="icon-phone-sign"></i> +56 (09) 71718239
		
		</address>
    </div>
  
</div>
-->
<footer>
<div class="container">
	<!--
	<hr>
	-->
        <p>© Grupo 4 UBB Company 2014</p>
  </div><!-- CONTAINER FOOTER-->
	  
</footer>


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<!-- Latest compiled and minified JavaScript -->


<!-- RESPONSIVE VIDEO PLUGIN -->
<!-- <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery.fitvids.min.js" type="text/javascript"></script>

<script>
        // Basic FitVids Test
        jQuery(".container").fitVids();
          
</script> -->

</body>
</html>