<?php
/* @var $this IntegraController */
/* @var $model Integra */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'integra-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>

<!-- 	<div class="row">
		<?php echo $form->labelEx($model,'INT_torCorrel'); ?>
		<?php echo $form->textField($model,'INT_torCorrel',array('disabled' => true)); ?>
		<?php echo $form->error($model,'INT_torCorrel'); ?>
	</div> -->

<!-- 	<div class="row">
		<?php echo $form->labelEx($model,'INT_equCorrel'); ?>
		<?php echo $form->textField($model,'INT_equCorrel',array('disabled' => true)); ?>
		<?php echo $form->error($model,'INT_equCorrel'); ?>
	</div> -->

	<div class="row">
		<?php echo $form->labelEx($model,'INT_puntaje'); ?>
		<?php echo $form->textField($model,'INT_puntaje'); ?>
		<?php echo $form->error($model,'INT_puntaje'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'INT_golesFavor'); ?>
		<?php echo $form->textField($model,'INT_golesFavor'); ?>
		<?php echo $form->error($model,'INT_golesFavor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'INT_golesContra'); ?>
		<?php echo $form->textField($model,'INT_golesContra'); ?>
		<?php echo $form->error($model,'INT_golesContra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'INT_golesDif'); ?>
		<?php echo $form->textField($model,'INT_golesDif'); ?>
		<?php echo $form->error($model,'INT_golesDif'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'INT_partidoGanado'); ?>
		<?php echo $form->textField($model,'INT_partidoGanado'); ?>
		<?php echo $form->error($model,'INT_partidoGanado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'INT_partidoPerdido'); ?>
		<?php echo $form->textField($model,'INT_partidoPerdido'); ?>
		<?php echo $form->error($model,'INT_partidoPerdido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'INT_partidoEmpatado'); ?>
		<?php echo $form->textField($model,'INT_partidoEmpatado'); ?>
		<?php echo $form->error($model,'INT_partidoEmpatado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'INT_tarjetaRojas'); ?>
		<?php echo $form->textField($model,'INT_tarjetaRojas',array('disabled' => true)); ?>
		<?php echo $form->error($model,'INT_tarjetaRojas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'INT_tarjetaAmarilla'); ?>
		<?php echo $form->textField($model,'INT_tarjetaAmarilla',array('disabled' => true)); ?>
		<?php echo $form->error($model,'INT_tarjetaAmarilla'); ?>
	</div>

	<div class="row buttons">
		<?php echo BsHtml::submitButton('Aceptar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->