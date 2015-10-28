<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>




<section id="nosotros">
	<div class="center-container clearfix" data-scroll-reveal>
		<br /><br />
			<h1>Login</h1>

			<div class="form">
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'login-form',
				'enableClientValidation'=>true,
				'clientOptions'=>array(
					'validateOnSubmit'=>true,
				),
			)); ?>
			<br/>

				

				<div class="row col-md-4 center-container">
					<?php echo $form->labelEx($model,'username'); ?>
					<?php echo $form->textField($model,'username',array( 'class'=>'form-control ')); ?>
					<?php echo $form->error($model,'username'); ?>
				</div>

				<div class="row col-md-4 center-container">
					<?php echo $form->labelEx($model,'password'); ?>
					<?php echo $form->passwordField($model,'password',array( 'class'=>'form-control ')); ?>
					<?php echo $form->error($model,'password'); ?>
					
				</div>

				<div class="row rememberMe col-md-12">
					<?php echo $form->checkBox($model,'rememberMe'); ?>
					<?php echo $form->label($model,'rememberMe'); ?>
					<?php echo $form->error($model,'rememberMe'); ?>
				</div>

				<div class="row col-md-12 buttons  center-container">
					<?php echo CHtml::submitButton('Login', array('class'=>'button pink')); ?>
				</div>

			<?php $this->endWidget(); ?>
		</div><!-- form -->
	</div>
</section>