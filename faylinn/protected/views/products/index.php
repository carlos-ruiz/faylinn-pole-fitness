<?php
/* @var $this ProductsController */
/* @var $dataProvider CActiveDataProvider */
?>

<section id="login">
	<div class="center-container clearfix" data-scroll-reveal>
		<br /><br />

		<h1>Productos</h1>

		<?php
		$fila=0;
		foreach ($products as $i=>$product) {
			if($i%4==0 && $i>0){?>
				</div>
				<script type="text/javascript">
				$(".row_<?=$fila;?>").height($("#row_<?=$fila;?>").height());
				</script>
			<?php } if($i%4==0 || $i==0){ $fila++;?>
				<div class="m-12" id="row_<?=$fila;?>" data-scroll-reveal="enter right, move 60px, over 1.2s, after 0.3s">
			<?php } ?>

			<div class="m-03 product-container row_<?=$fila;?>">
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
		<script type="text/javascript">
		alert("hola <?=$fila;?>");
				$(".row_<?=$fila;?>").height($("#row_<?=$fila;?>").height());
				</script>
		</div>
	</div>
</section>

<style>


</style>