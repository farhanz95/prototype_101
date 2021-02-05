<?php
/* @var $this OrangasliController */
/* @var $model Orangasli */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'orangasli-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<label class="alert alert-info alert-sm alert-border-left light alert-dismissable fontwn font2">
		<a class="glyphicon glyphicon-exclamation-sign mr10"></a>Bahagian yang bertanda <span class="required">*</span> adalah wajib diisi
	</label>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ic', array('class'=>'col-lg-2 control-label text-right')); ?>
		<?php echo $form->textField($model,'ic',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'ic'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'nama', array('class'=>'col-lg-2 control-label text-right')); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'namakeluarga', array('class'=>'col-lg-2 control-label text-right')); ?>
		<?php echo $form->textField($model,'namakeluarga',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'namakeluarga'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'dob', array('class'=>'col-lg-2 control-label text-right')); ?>
		<?php echo $form->textField($model,'dob',array('size'=>17,'maxlength'=>17)); ?>
		<?php echo $form->error($model,'dob'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'keturunan', array('class'=>'col-lg-2 control-label text-right')); ?>
		<?php echo $form->textField($model,'keturunan',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'keturunan'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'agama', array('class'=>'col-lg-2 control-label text-right')); ?>
		<?php echo $form->textField($model,'agama',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'agama'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'jantina', array('class'=>'col-lg-2 control-label text-right')); ?>
		<?php echo $form->textField($model,'jantina',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'jantina'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'alamat', array('class'=>'col-lg-2 control-label text-right')); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'negeri', array('class'=>'col-lg-2 control-label text-right')); ?>
		<?php echo $form->textField($model,'negeri',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'negeri'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'daerah', array('class'=>'col-lg-2 control-label text-right')); ?>
		<?php echo $form->textField($model,'daerah',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'daerah'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'poskod', array('class'=>'col-lg-2 control-label text-right')); ?>
		<?php echo $form->textField($model,'poskod'); ?>
		<?php echo $form->error($model,'poskod'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'status', array('class'=>'col-lg-2 control-label text-right')); ?>
		<?php echo $form->textField($model,'status',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'catatan', array('class'=>'col-lg-2 control-label text-right')); ?>
		<?php echo $form->textArea($model,'catatan',array('form-groups'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'catatan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->