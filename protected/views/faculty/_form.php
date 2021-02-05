<?php
/* @var $this FacultyController */
/* @var $model Faculty */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'faculty-form',
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
	'enableAjaxValidation'=>false,
)); ?>

	
	<div class="alert alert-info pastel">
		Fields with <span class="required">*</span> are required
	</div>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'name' ,array('class'=>'col-lg-3 control-label')); ?>
		<div class="col-lg-7">
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'name'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'class' ,array('class'=>'col-lg-3 control-label')); ?>
		<div class="col-lg-7">
		<?php echo $form->textField($model,'class',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'class'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'postcode' ,array('class'=>'col-lg-3 control-label')); ?>
		<div class="col-lg-7">
		<?php echo $form->textField($model,'postcode', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'postcode'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'state' ,array('class'=>'col-lg-3 control-label')); ?>
		<div class="col-lg-7">
		<?php echo $form->textField($model,'state',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'state'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'country' ,array('class'=>'col-lg-3 control-label')); ?>
		<div class="col-lg-7">
		<?php echo $form->textField($model,'country',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'country'); ?>
		</div>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->