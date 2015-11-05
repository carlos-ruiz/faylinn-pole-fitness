<?php
/* @var $this ProductsController */
/* @var $model Products */
/* @var $form CActiveForm */
?>
<div class="form m-08 mt-80">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'products-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); 

?>

	<div class="row col-md-4">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row col-md-4">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>256, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row col-md-4">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>7,'maxlength'=>7, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>
	
	<div class="row col-md-4">
		<?php echo $form->labelEx($model,'size'); ?>
		<?php echo $form->textField($model,'size',array('size'=>45,'maxlength'=>45, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'size'); ?>
	</div>

	<?php if($model->isNewRecord) { ?>
		<div class="row col-md-4">
			<?php echo $form->labelEx($producto_imagen,'image_url'); ?>
			<?php echo $form->fileField($producto_imagen,'image_url'); ?>
			<?php echo $form->error($producto_imagen,'image_url'); ?>
			
		</div>
	<?php } ?>
	

	<div class="row col-md-4">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php // echo $form->textField($model,'status', array('class'=>'form-control')); ?>
		<?php echo $form->dropDownList($model, 'status', array('1'=>'Activo', '0'=>'Inactivo'), array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row col-md-4 buttons text-right">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Actualizar', array('class'=>'button pink')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<div class="m-04 mt-40">
	<?php if(!$model->isNewRecord){ ?>
		 <?php foreach ($model->productImages as $image) { ?>
		 <div id="image_<?php echo $image->id;?>">
			 <div class="m-12 center-container">
			    <img class="m-05" src="<?php echo $image->image_url;?>" />
			 </div>
			 <div class="m-12 center-container">
		    	<span class="button pink eliminarImagen" data-id="<?php echo $image->id;?>">Eliminar Imagen</span>
		    </div>
		    <hr class="m-05"/>
		   </div>
		  <?php } ?>
	<?php } ?>
</div>

<script type="text/javascript">
	$(".eliminarImagen").click(function(){
		var id=$(this).data('id');
		$.post(
			"<?php echo Yii::app()->request->baseUrl;?>/products/deleteImage",
			{
				id:id
			},
			function(error){
				if(error=="1")
					alert("Ocurrió un error, inténtalo de nuevo");
				else{
					$("#image_"+id).hide(400);
					$("#image_"+id).html("");
				}
			});
		});
</script>