<?php
/* @var $this SancionestadioController */
/* @var $model Sancionestadio */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sancionestadio-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'SAN_EST_estCorrel'); ?>
		<?php echo $form->textField($model,'SAN_EST_estCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'SAN_EST_estCorrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SAN_EST_arbCorrel'); ?>
		<?php echo $form->textField($model,'SAN_EST_arbCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'SAN_EST_arbCorrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SAN_EST_fecha'); ?>
		<?php echo $form->textField($model,'SAN_EST_fecha'); ?>
		<?php echo $form->error($model,'SAN_EST_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SAN_EST_castigo'); ?>
		<?php echo $form->textField($model,'SAN_EST_castigo'); ?>
		<?php echo $form->error($model,'SAN_EST_castigo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->