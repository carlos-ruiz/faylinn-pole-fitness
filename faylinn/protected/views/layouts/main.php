
<!doctype html>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">

		<!-- Page Title -->
		<title>Faylinn Pole Fitness</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/florence/images/favicon.ico" type="image/x-icon" />

		<!-- Stylesheets -->
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/florence/css/style.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/florence/css/custom.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/florence/css/responsive.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/florence/css/lightbox.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/florence/inc/font-awesome/css/font-awesome.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/florence/inc/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/florence/inc/owl-carousel/owl.theme.css">


		<link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/slider-revolution-slider/rs-plugin/css/settings.css" rel="stylesheet">

		<!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>

		<!--[if IE]>
	    	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	  	<![endif]-->
	</head>

	<body>

		<!-- Page Preloader -->
		<div id="preloader">
		    <div id="status">&nbsp;</div>
		</div>

		<!-- BEGIN HEADER -->
		<header>

			<!-- Top Navigation -->
			<nav data-scroll-reveal>
				<ul class="main-nav">
					<li><a href="#home">Home</a></li>
					<li class="sep"></li>
					<li><a href="#nosotros">Nosotros</a></li>
					<li class="sep"></li>
					<li><a href="#ubicacion">Ubicación</a></li>
					<li class="sep"></li>
					<li><a href="#dueña">Dueña</a></li>
					<li class="sep"></li>
					<li><a href="#horario">Horario</a></li>
					<li class="sep"></li>
					<li><a href="#eventos">Eventos</a></li>
					<li class="sep"></li>
					<li><a href="#experiencias">Experiencias</a></li>
					<li class="sep"></li>
					<li><a href="#rsvp">Contacto</a></li>
					<li class="sep"></li>
					<li><a href="https://www.facebook.com/faylinn.pole.studio?fref=ts" target="_blank"><i class="fa fa-facebook fa-mid"></i></a></li>
					<li class="sep"></li>
					<li><a href="#"><i class="fa fa-twitter fa-mid"></i></a></ul>
					</ul>

				<div class="mobile-nav">
					<ul class="mobile-nav-menu">
						<li><a href="#home">Home</a></li>
						<li><a href="#nosotros">Nosotros</a></li>
						<li><a href="#ubicacion">Ubicación</a></li>
						<li><a href="#dueña">Dueña</a></li>
						<li><a href="#horario">Horario</a></li>
						<li><a href="#eventos">Eventos</a></li>
						<li><a href="#experiencias">Experiencias</a></li>
						<li><a href="#rsvp">Contacto</a></li>
					</ul>
					<span class="show-menu"><i class="fa fa-bars"></i></span>
				</div>
			</nav>
			<div id="home">
				<div class="names" data-scroll-reveal>Ven con nosotros!! </div>
				<!-- Header Images -->
				<div class="center-content">
					<div >
						<div  id="slider" >
							<figure>
								<img  class="img-slider" src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" width=60%  height=35% alt="Faylinn Gym" class="img-logo">
								<img  class="img-slider" src="<?php echo Yii::app()->request->baseUrl; ?>/images/artlogo.png" width=60%  height=35% alt="Faylinn Gym" class="img-logo">
							</figure>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- END HEADER -->

		<!-- BEGIN CONTENT -->

		<?php echo $content; ?>
		<!-- END CONTENT -->

		<!-- BEGIN FOOTER -->
		<footer class="clearfix" data-scroll-reveal>
			<div class="m-12">
				<p><a href=""> Faylinn Gym - Facebook</a></p>
				<div class="m-12 soc">
					<a href="https://www.facebook.com/faylinn.pole.studio?fref=ts" target="_blank"><i class="fa fa-facebook fa-mid"></i></a>
					<a href="#"><i class="fa fa-twitter fa-mid"></i></a>
				</div>
				<span>Faylinn Gym © 2015 | Techinc </span>
			</div>
		</footer>
		<!-- END FOOTER -->

		<!-- Javascript -->
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/florence/js/jquery-1.11.0.js" type="text/javascript"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/florence/js/countdown.js" type="text/javascript"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/florence/js/scrollReveal.js" type="text/javascript"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/florence/js/lightbox.js" type="text/javascript"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/florence/js/jquery.form.min.js" type="text/javascript"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/florence/inc/owl-carousel/owl.carousel.js" type="text/javascript"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/florence/js/custom.js" type="text/javascript"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

	</body>
</html>



