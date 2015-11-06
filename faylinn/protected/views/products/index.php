<?php
/* @var $this ProductsController */
/* @var $dataProvider CActiveDataProvider */
?>

<section id="login">
	<div class="center-container clearfix" data-scroll-reveal>
	<br /><br />			

		<h1>Productos</h1>

		<div class="m-08 " data-scroll-reveal="enter right, move 60px, over 1.2s, after 0.3s">
			<div class="m-04 " >

			  	<h2>Nombre del producto </h2>
			  	<div class="item"><a href="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/10.jpg" data-lightbox="demo-gallery"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/10.jpg"  height="200px" width="50%" alt=""></a></div>
				  	<div id="owl-gallery" class="owl-carousel owl-theme" data-scroll-reveal>
					  <div class="item"><a href="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/10.jpg" data-lightbox="demo-gallery"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/10.jpg" alt=""></a></div>
					  <div class="item"><a href="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/6.jpg" data-lightbox="demo-gallery"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/6.jpg" alt=""></a></div>
					  <div class="item"><a href="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/9.jpg" data-lightbox="demo-gallery"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/9.jpg" alt=""></a></div>
					</div>
					<div class="floatLeft"> <strong>Descripición:</strong> lalalalalal</div>
					<div class="floatLeft"> <strong>Talla:</strong> s, m, g</div>
					<div class="floatLeft"> <strong>Precio:</strong> $ 400.00</div>			  	
			</div>
			
		</div>


	
		<!--div class="m-12 floatLeft" data-scroll-reveal="enter right, move 60px, over 1.2s, after 0.3s">
			<?php $this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProvider,
				'itemView'=>'_view',
			)); ?>
		</div-->
		</div>
</section>

<style>


</style>