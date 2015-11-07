<?php
/* @var $this ProductsController */
/* @var $model Products */

?>
<div class="center-container clearfix" data-scroll-reveal>
	<h1>Actualizar Producto: <?php echo $model->name; ?></h1>

	<?php $this->renderPartial('_form', array('model'=>$model,'producto_imagen'=>$producto_imagen,)); ?>
</div>
