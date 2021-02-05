<?php
/* @var $this TemujanjiController */
/* @var $model Temujanji */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'temujanji-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal', 'role'=>'form'),
)); ?>

	<label class="alert alert-info alert-sm alert-border-left light alert-dismissable fontwn font2">
		<a class="glyphicon glyphicon-exclamation-sign mr10"></a>Bahagian yang bertanda <span class="required">*</span> adalah wajib diisi
	</label>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'nama', array('class'=>'col-lg-2 control-label text-right')); ?>
		<div class="col-lg-8">
		<?php echo $form->textField($model,'nama',array('maxlength'=>255, 'class'=>'form-control w300')); ?>
		<?php echo $form->error($model,'nama'); ?>
		</div>
	</div>
	<div class="form-group">
		<?php echo $form->labelEx($model,'alamat', array('class'=>'col-lg-2 control-label text-right')); ?>
		<div class="col-lg-8">
		<?php echo $form->textField($model,'alamat',array('maxlength'=>255, 'class'=>'form-control w300')); ?>
		<?php echo $form->error($model,'alamat'); ?>
		</div>
	</div>
	<div class="form-group">
		<?php echo $form->labelEx($model,'negeri', array('class'=>'col-lg-2 control-label text-right')); ?>
		<div class="col-lg-8">
		<?php echo $form->textField($model,'negeri',array('maxlength'=>255, 'class'=>'form-control w300')); ?>
		<?php echo $form->error($model,'negeri'); ?>
		</div>
	</div>
	<div class="form-group">
		<?php echo $form->labelEx($model,'daerah', array('class'=>'col-lg-2 control-label text-right')); ?>
		<div class="col-lg-8">
		<?php echo $form->textField($model,'daerah',array('maxlength'=>255, 'class'=>'form-control w300')); ?>
		<?php echo $form->error($model,'daerah'); ?>
		</div>
	</div>
	<div class="form-group">
		<?php echo $form->labelEx($model,'postcode', array('class'=>'col-lg-2 control-label text-right')); ?>
		<div class="col-lg-8">
		<?php echo $form->textField($model,'postcode',array('maxlength'=>255, 'class'=>'form-control w300')); ?>
		<?php echo $form->error($model,'postcode'); ?>
		</div>
	</div>
	<div class="form-group">
		<?php echo $form->labelEx($model,'tarikh', array('class'=>'col-lg-2 control-label text-right')); ?>
		<div class="col-lg-8">
		<?php echo $form->textField($model,'tarikh',array('maxlength'=>255, 'class'=>'form-control w300')); ?>
		<?php echo $form->error($model,'tarikh'); ?>
		</div>
	</div>
	<div class="form-group">
		<?php echo $form->labelEx($model,'masa', array('class'=>'col-lg-2 control-label text-right')); ?>
		<div class="col-lg-8">
		<?php echo $form->textField($model,'masa',array('maxlength'=>255, 'class'=>'form-control w300')); ?>
		<?php echo $form->error($model,'masa'); ?>
		</div>
	</div>
	<div class="form-group">
		<?php echo $form->labelEx($model,'tempat', array('class'=>'col-lg-2 control-label text-right')); ?>
		<div class="col-lg-8">
		<?php echo $form->textField($model,'tempat',array('maxlength'=>255, 'class'=>'form-control w300')); ?>
		<?php echo $form->error($model,'tempat'); ?>
		</div>
	</div>
	<div class="form-group">
		<?php echo $form->labelEx($model,'penemuduga', array('class'=>'col-lg-2 control-label text-right')); ?>
		<div class="col-lg-8">
		<?php echo $form->textField($model,'penemuduga',array('maxlength'=>255, 'class'=>'form-control w300')); ?>
		<?php echo $form->error($model,'penemuduga'); ?>
		</div>
	</div>
	

	<div class="form-group">
		<div class="col-lg-3 control-label"></div>
		<div class="col-lg-7">
		<?php echo CHtml::tag('button', array('class' => 'btn btn-primary'), $model->isNewRecord ? 'Hantar' :'Kemaskini Temujanji');?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->