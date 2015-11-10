<?php
/* @var $this ProductsController */
/* @var $model Products */

?>

<div class="center-container clearfix">
  <h1 class="margin-top-large float-left">Producto <?php echo $model->name; ?></h1>
  <?php if(!Yii::app()->user->isGuest){ ?>
   <h1 class="margin-top-large float-right"><a href="#" class="button pink" id="addImageButton"><i class="icon-plus"></i> Agregar imagen</a></h1>
  <?php } ?>
    <hr />
  <?php if(!Yii::app()->user->isGuest){ ?>
  <div class="image-form" id="addImageForm">
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
        <label for="ProductImages_image_url" class="required float-left">Selecciona la nueva imagen <span class="required">*</span></label>
        <?php echo $form->fileField($producto_imagen,'image_url'); ?>
        <?php echo $form->error($producto_imagen,'image_url'); ?>
        <div class="buttons text-right float-left">
          <?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Actualizar', array('class'=>'button pink')); ?>
        </div>
      </div>
    <?php $this->endWidget(); ?>
    <hr style="margin-top:-20px;" />
  </div>
  <?php } ?>
  <div class="row-view">
    <div class="info">
      <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'attributes'=>array(
          'id',
          'name',
					'description',
					'price',
					'size',
				),
			)); ?>
		</div>
	</div>

<!--
  <div id="slider1_container" class="margin-top" style="position: relative; width: 720px;
      height: 480px; overflow: hidden;">


      <div u="loading" style="position: absolute; top: 0px; left: 0px;">
          <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
              background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
          </div>
          <div style="position: absolute; display: block; background: url(<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/jssor/img/loading.gif) no-repeat center center;
              top: 0px; left: 0px;width: 100%;height:100%;">
          </div>
      </div>


      <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 720px; height: 480px;
          overflow: hidden;">
          <?php
		foreach ($model->productImages as $image) { ?>
			<div>
              <img u="image" src="<?php echo $image->image_url;?>" />
              <img u="thumb" src="<?php echo $image->image_url;?>" />
          </div>


		<?php } ?>

      </div>


      <div u="thumbnavigator" class="jssort07" style="width: 720px; height: 100px; left: 0px; bottom: 0px;">

          <div u="slides" style="cursor: default;">
              <div u="prototype" class="p">
                  <div u="thumbnailtemplate" class="i"></div>
                  <div class="o"></div>
              </div>
          </div>

          <span u="arrowleft" class="jssora11l" style="top: 123px; left: 8px;">
          </span>

          <span u="arrowright" class="jssora11r" style="top: 123px; right: 8px;">
          </span>

      </div>

  </div>
  -->

  <?php foreach ($model->productImages as $image) { ?>
    <img class="m-04 mt-40" src="<?php echo $image->image_url;?>" />
  <?php } ?>

  <hr/>
  <?php if(!Yii::app()->user->isGuest){ ?>
  <div id="buttons" class="m-12 clearfix">
    <div class="m-02 float-right">
      <a href="<?= Yii::app()->request->baseUrl; ?>/products/update/<?= $model->id; ?>" class="button-o pink-o">Editar</a>
    </div>
    <div class="m-02 float-right">
      <a href="<?= Yii::app()->request->baseUrl; ?>/products/delete/<?= $model->id; ?>" class="button-o pink-o">Eliminar</a>
    </div>
    <div class="m-02 float-right">
      <a href="<?= Yii::app()->request->baseUrl; ?>/products/admin" class="button-o pink-o">Ir al admin</a>
    </div>
  </div>
  <?php } ?>


</div>

<script type="text/javascript">
  var isShown=false;
  $('#addImageButton').click(function(){
    if(isShown){
      isShown=false;
      $('#addImageForm').hide(400);
    }else{
      isShown=true;
      $('#addImageForm').show(400);
    }
  });
</script>