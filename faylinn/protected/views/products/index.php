<?php
/* @var $this ProductsController */
/* @var $dataProvider CActiveDataProvider */
?>

<div class="center-container clearfix" data-scroll-reveal>

	<h1>Productos</h1>
	<div class="m-12 catalog-container" data-scroll-reveal="enter right, move 100px, over 1.2s, after 0.3s">
	<?php foreach ($products as $i=>$product) { ?>
		<div class="m-03 product-container">
			<div class="product-item" >
				<h2><?= $product->name; ?></h2>
				<div class="item">
					<a href="<?php echo $product->productImages[0]->image_url; ?>" data-lightbox="demo-gallery"><img src="<?php echo $product->productImages[0]->image_url; ?>" alt=""></a>
				</div>
				<div id="owl-gallery" class="owl-gallery owl-carousel owl-theme" data-scroll-reveal>
				<?php
				foreach ($product->productImages as $i=>$image) {
					if($i>0){
					?>
					<div class="item">
						<a href="<?php echo $image->image_url; ?>" data-lightbox="demo-gallery">
						<img src="<?php echo $image->image_url; ?>" alt="" /></a>
					</div>
				<?php }} ?>

				</div>
				<div> <strong>Talla: </strong><?= $product->size; ?></div>
				<div> <strong>Precio: </strong>$ <?= $product->price; ?></div>
				<div> <strong>Descripción: </strong><?= $product->description; ?></div>
			</div>
		</div>

		<div class="m-03 product-container">
			<div class="product-item" >
				<h2><?= $product->name; ?></h2>
				<div class="item">
					<a href="<?php echo $product->productImages[0]->image_url; ?>" data-lightbox="demo-gallery"><img src="<?php echo $product->productImages[0]->image_url; ?>" alt=""></a>
				</div>
				<div id="owl-gallery" class="owl-gallery owl-carousel owl-theme" data-scroll-reveal>
				<?php
				foreach ($product->productImages as $i=>$image) {
					if($i>0){
					?>
					<div class="item">
						<a href="<?php echo $image->image_url; ?>" data-lightbox="demo-gallery">
						<img src="<?php echo $image->image_url; ?>" alt="" /></a>
					</div>
				<?php }} ?>

				</div>
				<div> <strong>Talla: </strong><?= $product->size; ?></div>
				<div> <strong>Precio: </strong>$ <?= $product->price; ?></div>
				<div> <strong>Descripción: </strong><?= $product->description; ?></div>
			</div>
		</div>
		<div class="m-03 product-container">
			<div class="product-item" >
				<h2><?= $product->name; ?></h2>
				<div class="item">
					<a href="<?php echo $product->productImages[0]->image_url; ?>" data-lightbox="demo-gallery"><img src="<?php echo $product->productImages[0]->image_url; ?>" alt=""></a>
				</div>
				<div id="owl-gallery" class="owl-gallery owl-carousel owl-theme" data-scroll-reveal>
				<?php
				foreach ($product->productImages as $i=>$image) {
					if($i>0){
					?>
					<div class="item">
						<a href="<?php echo $image->image_url; ?>" data-lightbox="demo-gallery">
						<img src="<?php echo $image->image_url; ?>" alt="" /></a>
					</div>
				<?php }} ?>

				</div>
				<div> <strong>Talla: </strong><?= $product->size; ?></div>
				<div> <strong>Precio: </strong>$ <?= $product->price; ?></div>
				<div> <strong>Descripción: </strong><?= $product->description; ?></div>
			</div>
		</div>
		<div class="m-03 product-container">
			<div class="product-item" >
				<h2><?= $product->name; ?></h2>
				<div class="item">
					<a href="<?php echo $product->productImages[0]->image_url; ?>" data-lightbox="demo-gallery"><img src="<?php echo $product->productImages[0]->image_url; ?>" alt=""></a>
				</div>
				<div id="owl-gallery" class="owl-gallery owl-carousel owl-theme" data-scroll-reveal>
				<?php
				foreach ($product->productImages as $i=>$image) {
					if($i>0){
					?>
					<div class="item">
						<a href="<?php echo $image->image_url; ?>" data-lightbox="demo-gallery">
						<img src="<?php echo $image->image_url; ?>" alt="" /></a>
					</div>
				<?php }} ?>

				</div>
				<div> <strong>Talla: </strong><?= $product->size; ?></div>
				<div> <strong>Precio: </strong>$ <?= $product->price; ?></div>
				<div> <strong>Descripción: </strong><?= $product->description; ?></div>
			</div>
		</div>
	<?php } ?>
	</div>

<hr/>
<?php if(!Yii::app()->user->isGuest){ ?>
<div id="buttons" class="m-12 clearfix">
<div class="m-02 float-right">
  <a href="<?= Yii::app()->request->baseUrl; ?>/products/admin" class="button-o pink-o">Ir al admin</a>
</div>
</div>
<?php } ?>
</div>
