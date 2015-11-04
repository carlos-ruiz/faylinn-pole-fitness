<?php
/* @var $this ProductsController */
/* @var $model Products */

?>
<style type="text/css">
	.product-image, .info, .galery{
		
		float:left;
	}
	.product-image{
		margin-left:10px;
		width:24%;
	}
	.info{
		
		width:100%;
	}
	.margin-top-large{
		margin-top: 80px;
	}
	.row-view{
		width: 100%;
		height: auto;
	}

	.margin-top{
		margin-top: 20px;
	}

	/********* JSSOR ****************/
	#slider1_container img {
	    max-width:100%;
	    max-height:500px !important;
	}


	.jssort07 {
        position: absolute;
        /* size of thumbnail navigator container */
        width: 800px;
        height: 100px;
    }

    .jssort07 .p {
        position: absolute;
        top: 0;
        left: 0;
        width: 99px;
        height: 66px;
    }

    .jssort07 .i {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 99px;
        height: 66px;
        filter: alpha(opacity=80);
        opacity: .8;
    }

    .jssort07 .p:hover .i, .jssort07 .pav .i {
        filter: alpha(opacity=100);
        opacity: 1;
    }

    .jssort07 .o {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 97px;
        height: 64px;
        border: 1px solid #000;
        box-sizing: content-box;
        transition: border-color .6s;
        -moz-transition: border-color .6s;
        -webkit-transition: border-color .6s;
        -o-transition: border-color .6s;
    }

    .jssort07 .pav .o {
        border-color: #0099ff;
    }

    .jssort07 .p:hover .o {
        border-color: #fff;
        transition: none;
        -moz-transition: none;
        -webkit-transition: none;
        -o-transition: none;
    }

    .jssort07 .p.pdn .o {
        border-color: #0099ff;
    }

    * html .jssort07 .o {
        /* ie quirks mode adjust */
        width /**/: 99px;
        height /**/: 66px;
    }

    .jssora11l, .jssora11r {
        display: block;
        position: absolute;
        /* size of arrow element */
        width: 37px;
        height: 37px;
        cursor: pointer;
        background: url(../images/jssor/img/a11.png) no-repeat;
        overflow: hidden;
    }

    .jssora11l {
        background-position: -11px -41px;
    }

    .jssora11r {
        background-position: -71px -41px;
    }

    .jssora11l:hover {
        background-position: -131px -41px;
    }

    .jssora11r:hover {
        background-position: -191px -41px;
    }

    .jssora11l.jssora11ldn {
        background-position: -251px -41px;
    }

    .jssora11r.jssora11rdn {
        background-position: -311px -41px;
    }
/*************** END JSSOR ******************/
	.center-div{
		width: 75%;
		margin-left: 12%;
	}

	.float-left{
		float: left;
	}

	.float-right{
		float: right;
	}
</style>
<div class="center-div">
	<h1 class="margin-top-large float-left">View Products #<?php echo $model->id; ?></h1>
	<h1 class="margin-top-large float-right"><a class="button pink"><i class="icon-plus"></i> Agregar imagen</a></h1>
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
					'status',
				),
			)); ?>
		</div>
	</div>

<!-- Jssor Slider Begin -->
  <div id="slider1_container" class="margin-top" style="position: relative; width: 720px;
      height: 480px; overflow: hidden;">

      <!-- Loading Screen -->
      <div u="loading" style="position: absolute; top: 0px; left: 0px;">
          <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
              background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
          </div>
          <div style="position: absolute; display: block; background: url(<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/jssor/img/loading.gif) no-repeat center center;
              top: 0px; left: 0px;width: 100%;height:100%;">
          </div>
      </div>

      <!-- Slides Container -->
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
      
      <!-- INICIAMOS SEGUNDO SLIDER -->
      <div u="thumbnavigator" class="jssort07" style="width: 720px; height: 100px; left: 0px; bottom: 0px;">
          <!-- Thumbnail Item Skin Begin -->
          <div u="slides" style="cursor: default;">
              <div u="prototype" class="p">
                  <div u="thumbnailtemplate" class="i"></div>
                  <div class="o"></div>
              </div>
          </div>
          <!-- Thumbnail Item Skin End -->
          <!--#region Arrow Navigator Skin Begin -->
          <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->

          <!-- Arrow Left -->
          <span u="arrowleft" class="jssora11l" style="top: 123px; left: 8px;">
          </span>
          <!-- Arrow Right -->
          <span u="arrowright" class="jssora11r" style="top: 123px; right: 8px;">
          </span>
          <!--#endregion Arrow Navigator Skin End -->
      </div>
      <!--#endregion Thumbnail Navigator Skin End -->
  </div>
</div>
<script>
        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $UISearchMode: 0,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).

                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $Loop: 1,                                       //[Optional] Enable loop(circular) of carousel or not, 0: stop, 1: loop, 2 rewind, default value is 1
                    $SpacingX: 3,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $SpacingY: 3,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 6,                              //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 253,
                                              //[Optional] The offset position to park thumbnail,
                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                        $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                        $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                        $Steps: 6                                       //[Optional] Steps to go for each navigation request, default value is 1
                    }
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.min(parentWidth, window.innerWidth));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end

        });
    </script>