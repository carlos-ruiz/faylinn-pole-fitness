<?php
/* @var $this ProductsController */
/* @var $model Products */

?>
	<!-- <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/css/bootstrap.min.css"> -->
<?php
	if(Yii::app()->user->isGuest){
		$form=$this->beginWidget('CActiveForm', array(
			'id'=>'login-form',
			'htmlOptions'=>array('class' => 'login-form'),
			'enableClientValidation'=>true,
			'clientOptions'=>array(
				'validateOnSubmit'=>true,
			),
		)); ?>

		<br/><br/><br/><br/>
		<div class="login-container">
			<h3 class="form-title" style="color:#1e90ff !important;">Iniciar sesión</h3>
			<div class="alert alert-info display-hide">
				<button class="close" data-close="alert"></button>
				<span>
				Introduce usuario y contraseña </span>
			</div>


			<div class="form-group col-md-4">
				<?php echo $form->labelEx($model,'username', array('class'=>'control-label visible-ie8 visible-ie9')); ?>
				<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>200, 'class'=>'form-control form-control-solid placeholder-no-fix', 'placeholder'=>'Usuario')); ?>
				<?php echo $form->error($model,'username', array('class'=>'help-block')); ?>
			</div>

			<div class="form-group col-md-4">
				<?php echo $form->labelEx($model,'password', array('class'=>'control-label visible-ie8 visible-ie9')); ?>
				<?php echo $form->passwordField($model,'password',array('class'=>'form-control form-control-solid placeholder-no-fix', 'type'=>'password', 'placeholder'=>'Contraseña')); ?>
				<?php echo $form->error($model,'password', array('class'=>'help-block')); ?>

			</div>

			<div class="form-actions" style="color:black !important;">
			<?php echo CHtml::submitButton('Entrar',array('class'=>'btn blue-stripe uppercase')); ?>
				<?php echo $form->checkBox($model,'rememberMe'); ?>
				<?php echo $form->label($model,'rememberMe',array('class'=>'rememberme check', 'style'=>'color: black !important;')); ?>
				<?php echo $form->error($model,'rememberMe'); ?>
			</div>
		</div>

<?php $this->endWidget();
	}
	else{
?>
		<div id="home" class="container">
			<div class="names" data-scroll-reveal>Administrar Productos</div>
			<div class="text-right">
				<?php echo CHtml::link('<i class="icon-plus"></i> Agregar producto', array('products/create'), array('class'=>'button pink')); ?>
			</div>

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
						array(
							'name'=>'status',
							'value'=>array($this, 'getStatus'),
						),
						array(
							'class'=>'CButtonColumn',
							),
						),
						)); ?>
			</div>
		</div>
	<?php } ?>
	<hr/>
