<?php
/* @var $this KeluargaController */
/* @var $model Keluarga */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'keluarga_id'); ?>
		<?php echo $form->textField($model,'keluarga_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'catatan'); ?>
		<?php echo $form->textField($model,'catatan',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'orangasli_id'); ?>
		<?php echo $form->textField($model,'orangasli_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_kir'); ?>
		<?php echo $form->textField($model,'nama_kir',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kp_baru'); ?>
		<?php echo $form->textField($model,'kp_baru',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kp_lama'); ?>
		<?php echo $form->textField($model,'kp_lama',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'warna_kp'); ?>
		<?php echo $form->textField($model,'warna_kp',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat_kir'); ?>
		<?php echo $form->textArea($model,'alamat_kir',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'poskod'); ?>
		<?php echo $form->textField($model,'poskod',array('size'=>60,'maxlength'=>255)); ?>
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
		<?php echo $form->label($model,'mukim'); ?>
		<?php echo $form->textField($model,'mukim',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kampung'); ?>
		<?php echo $form->textField($model,'kampung',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_perjawatan'); ?>
		<?php echo $form->textField($model,'status_perjawatan',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kampung_jkkk'); ?>
		<?php echo $form->textField($model,'kampung_jkkk',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_ahli'); ?>
		<?php echo $form->textField($model,'status_ahli',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parlimen'); ?>
		<?php echo $form->textField($model,'parlimen',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dun'); ?>
		<?php echo $form->textField($model,'dun',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->