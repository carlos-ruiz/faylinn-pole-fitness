<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div id="home">
	<div class="names" data-scroll-reveal>Ven con nosotros!! </div>
	<!-- Header Images -->
	<div class="center-content">
		<div >
			<div  id="slider" >
				<figure>
					<img  class="img-slider" src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" width=60%  height=35% alt="Faylinn Gym" class="img-logo">
					<a href="<?php echo Yii::app()->request->baseUrl; ?>/site/poleart#home" target="_blank"><img  class="img-slider" src="<?php echo Yii::app()->request->baseUrl; ?>/images/artlogo.png" width=60%  height=35% alt="Faylinn Gym" class="img-logo"></a>
				</figure>
			</div>
		</div>
	</div>
</div>
<!-- Nosotros -->
		<section id="nosotros">
			<h1 data-scroll-reveal>Nosotros</h1>
			<hr>

			<!-- Couple Info -->
			<div class="center-container clearfix" data-scroll-reveal>
				<div class="m-06" data-scroll-reveal="enter left, move 60px, over 1.2s, after 0.3s">
					<h2>Misión</h2>
					<p>Promover y Motivar a personas de todas las edades y capacidades a desarrollar hábitos saludables así como habilidades necesarias para la práctica del pole fitness, pole dance y otras actividades fitness mediante una enseñanza de calidad, teniendo como base el profesionalismo de nuestros instructores.</p>
				</div>

				<div class="m-06" data-scroll-reveal="enter right, move 60px, over 1.2s, after 0.3s">
					<h2>Visión</h2>
					<p>Ser el estudio líder en Michoacán, con exclusivos e innovadores programas de capacitación continua que hagan la diferencia, posicionándonos como la mejor opción de nuestros clientes para alcanzar la óptima calidad en sus entrenamientos en un marco de respeto, alegría y cordialidad.</p>
				</div>
				<div class="m-06" data-scroll-reveal="enter left, move 60px, over 1.2s, after 0.3s">
					<h2>¿Por qué Faylinn fitness & pole dance?</h2>
					<div class="row">
						<div class="rightContainer text-right">• Nuestros instructores están certificados y en capacitación continua con profesionales  industria del pole fitness.</div>
						</br><div class="rightContainer text-right">• Somos el primer estudio en Morelia con un equipo de competencia que participa en una competencia nacional obteniendo el primer lugar en la categoría infantil en noviembre de 2014, primer lugar amateur y tercer lugar profesional en mayo 2015.</div>
			            </br><div class="rightContainer text-right">• Somos estudio avalado por la APM</div>
					</div>
				</div>

				<div class="m-06" data-scroll-reveal="enter right, move 60px, over 1.2s, after 0.3s">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/apm.jpg" alt="APM" width=40%  height=3% class="round-img">
				</div>
			</div>
		</section>

		<!-- Ubicación -->
		<section id="ubicacion">
			<h1 data-scroll-reveal></h1>
			<hr>
			<div class="center-container">
				<h1 data-scroll-reveal>Ubicación</h1>
				<p><strong>Av. Fuentes de Morelia no. 107</strong> Morelia, Michoacán </p>
			</div>
			<!-- Google Map -->
			<div id="map-canvas" class="m-12" data-scroll-reveal> </div>
		</section>

		<!-- Dueña -->
		<section id="dueña">
			<h1 data-scroll-reveal>Dueña del Estudio: Laura Avilés Rodríguez</h1>
			<h2 data-scroll-reveal>Mexicana</h2>
			<hr>

			<div class="center-container clearfix">
				<div class="m-04 mt-40" data-scroll-reveal="enter left, over 1s">
					<h2>Un poco de ella...</h2>
					<div class="floatLeft">
						<p>Comienza su experiencia en Pole Fitness en 2010 como instructora.</p>
						<p><strong>Certificaciones: </strong>
						   • Polerinas 2013 módulos principiante, intermedio y avanzado.
						   • Diana Ham 2015 módulo intermedio-avanzado.</p>
					</div>
					<h2>Cursos y talleres</h2>
					<div class="floatLeft">
						<p><strong>2011</strong></br>
							•Taller de pole fitness con Kris Medsey</br>
							•Taller de streching con Salvador Muñoz</br>
							•Taller de pilates con Ceci Avila</br>
						</p>
						<p><strong>2013</strong></br>
							•Taller de introducción al programa de FitCombat</br>
							•Taller de danza aérea en telas con RuzenaLiskova</br>
						</p>
					</div>
				</div>

				<div class="m-04" data-scroll-reveal>
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/lau.jpg" height="300" alt="Lau" class="round-img">
				</div>

				<div class="m-04 mt-40" data-scroll-reveal="enter right, over 1s">
					<h2>Cursos y talleres</h2>
					<div class="floatLeft">
						<p><strong>2014</strong></br>
							•Taller de estiramiento con RuzenaLiskova</br>
							•Taller de pole coreográfico con Mark Buhanstov</br>
							•Taller de pole signaturetricks con Mark Buhanstov</br>
							•Taller de pole Acrobacias con Mark Buhanstov</br>
							•Taller de Aro circense con Estefany Giron</br>
							•Taller pole HelloFonji con Diana Pardo</br>
							•Taller de pole con Sergio Chan</br>
							•Taller de contemporáneo con Mario Hernández</br>
						</p>
						<p><strong>2015</strong></br>
							•Seminario de Sensualidad con Andrea Macías</br>
							•Taller de pole perfección con Mónica Ochoa</br>
							•Taller de power pole con Mónica Ochoa</br>
							•Taller de SignatureTricks con Mónica Ochoa</br>
							•Taller de escapes con Andrea Vélez</br>
							•Taller de Handspring con Andrea Vélez</br>
							•Taller de Saltos y Caídas con Andrea Vélez</br>
						</p>
					</div>
				</div>
			</div>

		</section>

		<!-- The Party -->
		<section id="horario">
			<h1 data-scroll-reveal>Horario</h1>
			<hr>
<div data-scroll-reveal="enter bottom, over 1s, after 0.9s" class="center-container clearfix">

			<table class="schedule center-container">
			  <tr class="letter pink-background">
			    <td>Hora</td>
			    <td>Lunes</td>
			    <td>Martes</td>
			    <td>Miércoles</td>
			    <td>Jueves</td>
			    <td>Viernes</td>
			    <td>Sábado</td>
			  </tr>
			  <tr>
			    <td><strong>8:00-9:00 am</strong></td>
			    <td>Pole</td>
			    <td>Pole</td>
			    <td>Pole</td>
			    <td>Pole</td>
			    <td>Pole</td>
			    <td>-</td>
			  </tr>
			  <tr>
			    <td><strong>9:00-10:00 am</strong></td>
			    <td>Entrenamiento Funcional</td>
			    <td>Entrenamiento Funcional</td>
			    <td>Entrenamiento Funcional</td>
			    <td>Entrenamiento Funcional</td>
			    <td>Entrenamiento Funcional</td>
			    <td>-</td>
			  </tr>
			  <tr>
			    <td><strong>10:00-11:00 am</strong></td>
			    <td>Pole</td>
			    <td>Pole</td>
			    <td>Pole</td>
			    <td>Pole</td>
			    <td>Pole</td>
			    <td>Pole</td>
			  </tr>
			  <tr>
			    <td><strong>5:00-6:00 pm</strong></td>
			    <td>Pole</td>
			    <td>Pole</td>
			    <td>Pole</td>
			    <td>Pole</td>
			    <td>Pole</td>
			    <td>-</td>
			  </tr>
			   <tr>
			    <td><strong>6:00-7:00 pm</strong></td>
			    <td>Entrenamiento Funcional</td>
			    <td>Fit-Combat</td>
			    <td>Entrenamiento Funcional</td>
			    <td>Fit-Combat</td>
			    <td>Entrenamiento Funcional</td>
			    <td>-</td>
			  </tr>
			   <tr>
			    <td><strong>7:00-8:00 pm</strong></td>
			    <td>Pole</td>
			    <td>Pole</td>
			    <td>Pole</td>
			    <td>Pole</td>
			    <td>Pole</td>
			    <td>-</td>
			  </tr>
			   <tr>
			    <td><strong>8:00-9:00 pm</strong></td>
			    <td>Fit-Combat</td>
			    <td>Telas Aéreas</td>
			    <td>Fit-Combat</td>
			    <td>Telas Aéreas</td>
			    <td>Telas Aéreas</td>
			    <td>-</td>
			  </tr>
			   <tr>
			    <td><strong>9:00-10:00 pm</strong></td>
			    <td>Pole</td>
			    <td>Pole</td>
			    <td>Pole</td>
			    <td>Pole</td>
			    <td>Pole</td>
			    <td>-</td>
			  </tr>
			</table>
</div>

		</section>

		<!-- Accommodation -->
		<section id="eventos">
			<h1 data-scroll-reveal>Eventos</h1>
			<hr>
			<h3 data-scroll-reveal>Talleres</h3>
			<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/talleres/inscripcion.docx" target="_blank" >Descarga Formato de inscripción</a>


			<div class="center-container clearfix">
				<div class="center-container clearfix" data-scroll-reveal>
					<div class="m-06" data-scroll-reveal="enter left, move 60px, over 1.2s, after 0.3s">
							<br/><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/talleres/spider.jpg"  width="350" alt="" >
					</div>
					<div class="m-04" data-scroll-reveal="enter right, move 60px, over 1.2s, after 0.3s">
						<br/><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/talleres/andrea.jpg"  width="500" alt="" >
					</div>
				</div>
			</div>
			<div class="m-12" data-scroll-reveal="enter right, move 60px, over 1.2s, after 0.3s">
				<div class="floatLeft">
					<div class="paddingLeft">
						<p><span class="colorPink"> <strong>Pago: </strong></span>Depósito bancario en <strong>Banorte</strong> con clave intervancaria <strong>072470005086306996</strong> a nombre de Laura Avilés del <strong>50% del costo</strong> para cualquiera de los dos talleres y el resto se paga el dia del evento.<br/><span class="colorPink"> <strong>Cancelación: </strong></span> Serán con un mes de anticipación para devolucion del dinero después de esa fecha no habrá devoluciones.
						<br/> Enviar formato de inscripción y foto o escaner del pago a <span class="colorPink"> <strong> poleartfitness-michoacan@hotmail.com </strong></span>
						</p>
					</div>
				</div>
			</div>

			<br/><br/><h3 data-scroll-reveal>Despedidas de Solteras</h3>
			<div class="center-container clearfix">
			<div class="center-container clearfix" data-scroll-reveal>
				<div class="m-06" data-scroll-reveal="enter left, move 60px, over 1.2s, after 0.3s">
					</br></br></br></br></br></br></br></br>
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/desp.png" alt="" >
				</div>

				<div class="m-06" data-scroll-reveal="enter right, move 60px, over 1.2s, after 0.3s">
					<p>Ser el estudio líder en Michoacán, con exclusivos e innovadores programas de capacitación continuaque hagan la diferencia, posicionándonos como la mejor opción de nuestros clientes para alcanzar la óptima calidad en sus entrenamientos en un marco de respeto, alegría y cordialidad.</p>
				</div>

				<div class="m-03" data-scroll-reveal="enter right, move 60px, over 1.2s, after 0.3s">
					<h3>Paquete 1</h3>
					<div class="floatLeft">
					<p>• <strong>Duración: </strong> una hora y media.</br>
					   • <strong>Costo $100 por persona</strong>(mínimo 6 personas, máximo 11 personas).</br>
                 	   • <strong>Descripción:</strong>
						Se les da una clase en el salón. La instructora les enseñará pasos básicos en el tubo, giros y trabajo de piso para que puedan armar una pequeña coreografía, sin compartir tubo.
					</p>
					</div>
					</br>
					<h3>Extras</h3>
					<div class="floatLeft">
					<p>A todos nuestros paquetes les puedes agregar:
					   • <strong>Invitaciones para tu Despedida  </strong> desde $30 por invitación.</br>
					   • <strong>Playera $250 por persona</strong>(en pedidos mayores a 10 el precio baja a $200 cada una).</br>
                 	   • <strong>Mesa de dulces o postres $80 por persona</strong> (mínimo 20 personas).
					</p>
					</div>
				</div>
				<div class="m-03" data-scroll-reveal="enter right, move 60px, over 1.2s, after 0.3s">
					<h3>Paquete 2</h3>
					<div class="floatLeft">
					<p>• <strong>Duración: </strong> una hora y media.</br>
					   • <strong>Costo $2,000</strong>(sin límite de invitada).</br>
                 	   • <strong>Descripción:</strong>
						Una instructora  va a tu casa con un tubo y les da clase, hace dinámicas por grupos para que todas puedan  practicar.
						</br>Se requiere una altura de techo de entre 2.24 y 2.74 mts, totalmente recto y sólido, no plafón.</br>Fuera de Morelia. se cobra una cuota extra
					</p>
					</div>
					<h3>Pagos</h3>
					<div class="floatLeft">
					<p>
					   • Para reservar la fecha es necesario pagar el 50% del costo del paquete.</br>
					   • El 50% restante se pagará a la instructora el día del evento antes de comenzar.</br>
                 	   • Se cobra un cargo por cancelación del 30% del total del paquete cancelando hasta 1 semana antes, para cancelaciones posteriores el cargo es del 50%.
					</p>
					<p><strong>Nota:</strong> No hacemos despedidas mixtas, únicamente para mujeres. </p>
					</div>
				</div>

			</div>


			</div>
		</section>

		<!-- Gifts -->
		<section id="experiencias">
			<h1 data-scroll-reveal>Experiencias</h1>
			<hr>
			<h2 data-scroll-reveal>Nosotros compartimos motivación pole</h2>

			<div data-scroll-reveal="enter top, over 1s, after 0.3s" class="center-container clearfix">

				<p> Mi motivación en el pole fitness además de ser un ejercicio muy completo debido a que se trabajan todos los grupos musculares, es un actividad que me reta a diario a mejorar día a día.
				Otra motivación importante es la satisfacción de ver los logros de cada alumna tanto físicos como emocionales.-<strong> Laura Áviles</strong></p>
			</div>

			<div class="center-container clearfix">

					<video width="270" height="500" controls>
	 				 <source src="<?php echo Yii::app()->request->baseUrl; ?>/images/video1.mp4">
					</video>
			</div>

			<h2 data-scroll-reveal>Algunos de nuestros buenos recuerdos...</h2>

			<!-- Carousel Gallery -->
			<div id="owl-gallery" class="owl-carousel owl-theme" data-scroll-reveal>
			  <div class="item"><a href="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/10.jpg" data-lightbox="demo-gallery"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/10.jpg" alt=""></a></div>
			  <div class="item"><a href="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/6.jpg" data-lightbox="demo-gallery"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/6.jpg" alt=""></a></div>
			  <div class="item"><a href="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/9.jpg" data-lightbox="demo-gallery"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/9.jpg" alt=""></a></div>
			  <div class="item"><a href="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/12.jpg" data-lightbox="demo-gallery"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/12.jpg" alt=""></a></div>
			  <div class="item"><a href="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/3.jpg" data-lightbox="demo-gallery"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/3.jpg" alt=""></a></div>
			   <div class="item"><a href="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/11.jpg" data-lightbox="demo-gallery"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/11.jpg" alt=""></a></div>
			  <div class="item"><a href="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/4.jpg" data-lightbox="demo-gallery"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/4.jpg" alt=""></a></div>
			  <div class="item"><a href="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/2.jpg" data-lightbox="demo-gallery"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/2.jpg" alt=""></a></div>
			  <div class="item"><a href="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/5.jpg" data-lightbox="demo-gallery"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/5.jpg" alt=""></a></div>
			<div class="item"><a href="<?php echo Yii::app()->request->baseUrl; ?>/images/certificacion1.jpg" data-lightbox="demo-gallery"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/certificacion1.jpg" alt="Certificación"></a></div>
			<div class="item"><a href="<?php echo Yii::app()->request->baseUrl; ?>/images/c2.jpg" data-lightbox="demo-gallery"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/c2.jpg" alt="Certificación"></a></div>

			</div>




		</section>

		<!-- RSVP Form -->
		<section id="rsvp">
			<h1 data-scroll-reveal>Escribenos</h1>
			<hr>
			<h2 data-scroll-reveal>¿Tienes alguna duda? </h2>

			<p data-scroll-reveal>&nbsp;Nosotros te contactamos.&nbsp;</p>

			<form id="form" action="<?php echo Yii::app()->request->baseUrl;?>/site/enviarCorreo"  method="post" data-scroll-reveal>
				<div class="center-container">
					<div class="m-12 floatLeft">
						<div class="m-06 ">
								<input class="text-box text-box-2 pl-fix custom-options" type="text" placeholder="Nombre Completo" name="nombre" id="nombre" required>
						</div>
						<div class="m-06 floatLeft">
							<div class="m-06">
								<input class="text-box pl-fix phone" type="text" placeholder="Telefono / Celular" name="tel" id="tel">
							</div>
							<div class="m-06 ">
								<input class="text-box pl-fix email" type="email" placeholder="E-mail" name="email" id="email" required>
							</div>
						</div>
						<div class=" floatLeft">
							<input class="text-box text-box-2 pl-fix custom-options" type="text" placeholder="Dudas / Comentarios" name="comentario" id="comentarios" required>
						</div>
					</div>

					<div class="m-12">

						<div id="success" class="alert-success" style="display:none;"><strong>Success!</strong> The message has been sent. <a href="#" class="close"><i class="fa fa-times fa-1x"></i></a></div>
						<div id="emailerr" class="alert-error" style="display:none;"><strong>Required fields!</strong> Please, fill all required fields! <a href="#" class="close"><i class="fa fa-times fa-1x"></i></a></div>
						<div id="servererr"class="alert-error" style="display:none;"><strong>Server Error!</strong> Please, try again later! <a href="#" class="close"><i class="fa fa-times fa-1x"></i></a></div>

						<?php echo CHtml::submitButton( 'Enviar' , array('class'=>'submit send-button')); ?>
					</div>
				</div>
		</section>
