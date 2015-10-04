<?php
/* @var $this ProductsController */
/* @var $dataProvider CActiveDataProvider */
?>
<div id="home">
	<div class="names" data-scroll-reveal>Productos</div>
</div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
