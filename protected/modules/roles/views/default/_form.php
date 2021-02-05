<?php
/* @var $this DefaultController */
/* @var $user User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'roles-form',
	'enableClientValidation'=>true,
	'htmlOptions'=>array('class'=>'form-horizontal', 'role'=>'form'),
)); ?>

	<div class="form-group pl10 pr10">
		<div class="alert alert-primary alert-sm alert-border-left light alert-dismissable fontwn fs13">
			Bahagian yang bertanda <span class="required">*</span> adalah wajib diisi.
		</div>
    </div>

	<?php echo $form->errorSummary($authitem); ?>

	<?php echo $form->hiddenField($authitem,'type',array('value'=>2)); ?>

	<div class="form-group">
		<?php echo $form->labelEx($authitem,'name', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($authitem,'name',array('size'=>30,'maxlength'=>100,'class'=>'form-control')); ?>
			<?php echo $form->error($authitem,'name'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($authitem,'Keterangan', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($authitem,'description',array('size'=>30,'maxlength'=>100,'class'=>'form-control')); ?>
			<?php echo $form->error($authitem,'description'); ?>
		</div>
	</div>

	<!-- <div class="form-group"> -->
		<?php // echo $form->labelEx($authitem,'bizrule', array('class'=>'col-lg-2 control-label')); ?>
		<!-- <div class="col-lg-8"> -->
			<?php // echo $form->textField($authitem,'bizrule',array('size'=>30,'maxlength'=>30,'class'=>'form-control')); ?>
			<?php // echo $form->error($authitem,'bizrule'); ?>
		<!-- </div> -->
	<!-- </div> -->

	<!-- <div class="form-group"> -->
		<?php // echo $form->labelEx($authitem,'data', array('class'=>'col-lg-2 control-label')); ?>
		<!-- <div class="col-lg-8"> -->
			<?php // echo $form->textField($authitem,'data',array('size'=>30,'maxlength'=>30,'class'=>'form-control')); ?>
			<?php // echo $form->error($authitem,'data'); ?>
		<!-- </div> -->
	<!-- </div> -->

	<div class="form-group">
		<label class="col-lg-2"></label>
		<div class="col-lg-8">
			<?php echo CHtml::submitButton($authitem->isNewRecord ? 'Daftar' : 'Simpan', array('class'=>'btn btn-default')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->