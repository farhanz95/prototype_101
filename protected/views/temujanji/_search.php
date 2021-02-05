<?php
/* @var $this TemujanjiController */
/* @var $model Temujanji */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'temujanji_id'); ?>
		<?php echo $form->textField($model,'temujanji_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'orangasli_id'); ?>
		<?php echo $form->textField($model,'orangasli_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>60,'maxlength'=>255)); ?>
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
		<?php echo $form->label($model,'postcode'); ?>
		<?php echo $form->textField($model,'postcode',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tarikh'); ?>
		<?php echo $form->textField($model,'tarikh',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'masa'); ?>
		<?php echo $form->textField($model,'masa',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tempat'); ?>
		<?php echo $form->textField($model,'tempat',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'penemuduga'); ?>
		<?php echo $form->textField($model,'penemuduga',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->