<?php
/* @var $this KadbancianController */
/* @var $model Kadbancian */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'kadbancian_id'); ?>
		<?php echo $form->textField($model,'kadbancian_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keluarga_id'); ?>
		<?php echo $form->textField($model,'keluarga_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statuscetakan'); ?>
		<?php echo $form->textField($model,'statuscetakan',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'catatan'); ?>
		<?php echo $form->textArea($model,'catatan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'negeri'); ?>
		<?php echo $form->textField($model,'negeri',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'daerah'); ?>
		<?php echo $form->textField($model,'daerah',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kampung'); ?>
		<?php echo $form->textField($model,'kampung',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_rumah'); ?>
		<?php echo $form->textField($model,'no_rumah',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tarikh'); ?>
		<?php echo $form->textField($model,'tarikh',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->