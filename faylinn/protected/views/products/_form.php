<?php
/* @var $this ProductsController */
/* @var $model Products */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'products-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

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