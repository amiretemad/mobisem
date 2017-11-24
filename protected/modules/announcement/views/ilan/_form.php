<?php
/* @var $this IlanController */
/* @var $model Ilan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ilan-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <div class="form-group">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

    <div class="form-group">
		<?php echo $form->labelEx($model,'product_id'); ?>
		<?php echo $form->textField($model,'product_id'); ?>
		<?php echo $form->error($model,'product_id'); ?>
	</div>

    <div class="form-group">
		<?php echo $form->labelEx($model,'stock_count'); ?>
		<?php echo $form->textField($model,'stock_count'); ?>
		<?php echo $form->error($model,'stock_count'); ?>
	</div>

    <div class="form-group">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

    <div class="form-group">
		<?php echo $form->labelEx($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
		<?php echo $form->error($model,'create_date'); ?>
	</div>

    <div class="form-group">
		<?php echo $form->labelEx($model,'expire_date'); ?>
		<?php echo $form->textField($model,'expire_date'); ?>
		<?php echo $form->error($model,'expire_date'); ?>
	</div>

    <div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-success')); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->