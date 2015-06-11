<?php
/* @var $this LesionController */
/* @var $model Lesion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lesion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>	

	<div class="row">
		<?php echo $form->labelEx($model,'LES_glosa'); ?>
		<?php echo $form->textField($model,'LES_glosa',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'LES_glosa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LES_fecha'); ?>
		<?php echo $form->textField($model,'LES_fecha'); ?>
		<?php echo $form->error($model,'LES_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LES_descripcion'); ?>
		<?php echo $form->textArea($model,'LES_descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'LES_descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LES_tiempoReposo'); ?>
		<?php echo $form->textField($model,'LES_tiempoReposo'); ?>
		<?php echo $form->error($model,'LES_tiempoReposo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->