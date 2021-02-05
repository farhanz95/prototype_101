<?php
/* @var $this KeluargaController */
/* @var $model Keluarga */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'keluarga-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'catatan'); ?>
		<?php echo $form->textField($model,'catatan',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'catatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'orangasli_id'); ?>
		<?php echo $form->textField($model,'orangasli_id'); ?>
		<?php echo $form->error($model,'orangasli_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_kir'); ?>
		<?php echo $form->textField($model,'nama_kir',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama_kir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kp_baru'); ?>
		<?php echo $form->textField($model,'kp_baru',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'kp_baru'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kp_lama'); ?>
		<?php echo $form->textField($model,'kp_lama',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'kp_lama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'warna_kp'); ?>
		<?php echo $form->textField($model,'warna_kp',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'warna_kp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat_kir'); ?>
		<?php echo $form->textArea($model,'alamat_kir',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'alamat_kir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'poskod'); ?>
		<?php echo $form->textField($model,'poskod',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'poskod'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'negeri'); ?>
		<?php echo $form->textField($model,'negeri',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'negeri'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'daerah'); ?>
		<?php echo $form->textField($model,'daerah',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'daerah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mukim'); ?>
		<?php echo $form->textField($model,'mukim',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'mukim'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kampung'); ?>
		<?php echo $form->textField($model,'kampung',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'kampung'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_perjawatan'); ?>
		<?php echo $form->textField($model,'status_perjawatan',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'status_perjawatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kampung_jkkk'); ?>
		<?php echo $form->textField($model,'kampung_jkkk',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'kampung_jkkk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_ahli'); ?>
		<?php echo $form->textField($model,'status_ahli',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'status_ahli'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parlimen'); ?>
		<?php echo $form->textField($model,'parlimen',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'parlimen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dun'); ?>
		<?php echo $form->textField($model,'dun',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'dun'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->