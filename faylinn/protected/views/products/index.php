<?php
/* @var $this ProductsController */
/* @var $dataProvider CActiveDataProvider */
?>

<section id="login">
	<div class="center-container clearfix" data-scroll-reveal>
		<br /><br />

		<h1>Productos</h1>
		<div class="m-12" data-scroll-reveal="enter right, move 60px, over 1.2s, after 0.3s">
		<?php foreach ($products as $product) { ?>
			<div class="m-03 product-container">
				<div class="product-item" >
					<h2><?php echo $product->name; ?></h2>
					<div class="item">
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/10.jpg" data-lightbox="demo-gallery"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/10.jpg"  height="200px" width="50%" alt=""></a>
					</div>
					<div id="owl-gallery" class="owl-gallery owl-carousel owl-theme" data-scroll-reveal>
						<div class="item">
							<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/10.jpg" data-lightbox="demo-gallery"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/10.jpg" alt=""></a>
						</div>
						<div class="item">
							<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/6.jpg" data-lightbox="demo-gallery"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/6.jpg" alt=""></a>
						</div>
						<div class="item">
							<a href="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/9.jpg" data-lightbox="demo-gallery"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/estudio/9.jpg" alt=""></a>
						</div>
					</div>
					<div> <strong>Talla:</strong> s, m, g</div>
					<div> <strong>Precio:</strong> $ 400.00</div>
					<div> <strong>Descripción:</strong> lalalalalal</div>
				</div>
			</div>
		<?php } ?>
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