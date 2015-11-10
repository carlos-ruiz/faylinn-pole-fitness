
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
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom/customStyle.css">

		<!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/florence/js/jquery-1.11.0.js" type="text/javascript"></script>

    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/jssor/js/jssor.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/jssor/js/jssor.slider.js"></script>
		<!--[if IE]>
	    	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	  	<![endif]-->
	</head>

	<body>
		<div id="backing-header"></div>
		<!-- Page Preloader -->
		<div id="preloader">
		    <div id="status">&nbsp;</div>
		</div>

		<!-- BEGIN HEADER -->
		<header>
			<!-- Top Navigation -->
			<nav id="menu-header" data-scroll-reveal>
				<ul class="main-nav">
					<li><a  class="imglog" href="<?php echo Yii::app()->request->baseUrl; ?>/site/poleart" target="_blank"><img   src="<?php echo Yii::app()->request->baseUrl; ?>/images/artlogo.png" width=100%  height=80% alt="Faylinn Gym" ></a></li>
					<li class="sep"></li>
					<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/index#home">Home</a></li>
					<li class="sep"></li>
					<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/index#nosotros">Nosotros</a></li>
					<li class="sep"></li>
					<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/index#ubicacion">Ubicación</a></li>
					<li class="sep"></li>
					<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/index#dueña">Dueña</a></li>
					<li class="sep"></li>
					<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/index#horario">Horario</a></li>
					<li class="sep"></li>
					<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/index#eventos">Eventos</a></li>
					<li class="sep"></li>
					<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/index#experiencias">Experiencias</a></li>
					<li class="sep"></li>
					<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/index#rsvp">Contacto</a></li>
					<li class="sep"></li>
					<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/products/index">Catálogo</a></li>
					<li class="sep"></li>
					<?php
						if(!Yii::app()->user->isGuest){
					?>
						<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/logout">Logout</a></li>
						<li class="sep"></li>
					<?php
						}
					?>
					<li><a href="https://www.facebook.com/faylinn.pole.studio?fref=ts" target="_blank"><i class="fa fa-facebook fa-mid"></i></a></li>
					<li class="sep"></li>
					<li><a href="#"><i class="fa fa-twitter fa-mid"></i></a></ul>
					</ul>

				<div class="mobile-nav">
					<ul class="mobile-nav-menu">
						<li><a  class="imglog" href="<?php echo Yii::app()->request->baseUrl; ?>/site/poleart" target="_blank">Pole Art</a></li>
						<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/index#home">Home</a></li>
						<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/index#nosotros">Nosotros</a></li>
						<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/index#ubicacion">Ubicación</a></li>
						<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/index#dueña">Dueña</a></li>
						<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/index#horario">Horario</a></li>
						<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/index#eventos">Eventos</a></li>
						<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/index#experiencias">Experiencias</a></li>
						<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/index#rsvp">Contacto</a></li>
						<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/products/index">Catálogo</a></li>
						<?php if(!Yii::app()->user->isGuest){ ?>
							<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/logout">Logout</a></li>
						<?php }	?>
					</ul>
					<span class="show-menu"><i class="fa fa-bars"></i></span>
				</div>
			</nav>
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

		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/florence/js/countdown.js" type="text/javascript"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/florence/js/scrollReveal.js" type="text/javascript"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/florence/js/lightbox.js" type="text/javascript"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/florence/js/jquery.form.min.js" type="text/javascript"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/florence/inc/owl-carousel/owl.carousel.js" type="text/javascript"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/florence/js/custom.js" type="text/javascript"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
		<script type="text/javascript">
			var backingHeader = document.getElementById("backing-header");
            var offsetHeight = document.getElementById("menu-header").offsetHeight;
            backingHeader.setAttribute("style","height:"+offsetHeight+"px");
		</script>
	</body>
</html>



