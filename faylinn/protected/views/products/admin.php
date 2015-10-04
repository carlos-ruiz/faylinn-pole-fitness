<?php
/* @var $this ProductsController */
/* @var $model Products */

?>

<div id="home">
	<div class="names" data-scroll-reveal>Administrar Productos</div>

	<div class="center-content">

			<?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'products-grid',
				'dataProvider'=>$model->search(),
				'filter'=>$model,
				'columns'=>array(
					'id',
					'name',
					'description',
					'price',
					'size',
					'status',
					array(
						'class'=>'CButtonColumn',
						),
					),
					)); ?>
				</div>
			</div>
