<?php
/* @var $this DefaultController */
/* @var $user User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableClientValidation'=>true,
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal', 'role'=>'form'),
)); ?>

	<div class="form-group pl10 pr10">
		<div class="alert alert-primary alert-sm alert-border-left light alert-dismissable fontwn fs13">
			Bahagian yang bertanda <span class="required">*</span> adalah wajib diisi.
		</div>
    </div>

	<?php echo $form->errorSummary($user); ?>

	<div class="form-group">
		<?php echo $form->labelEx($user,'login', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->textField($user,'login',array('size'=>30,'maxlength'=>30,'class'=>'form-control')); ?>
			<?php echo $form->error($user,'login'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($user,'password', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->passwordField($user,'password',array('size'=>30,'maxlength'=>32,'class'=>'form-control')); ?>
			<?php echo $form->error($user,'password'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($user,'password_repeat', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-8">
			<?php echo $form->passwordField($user,'password_repeat',array('size'=>30,'maxlength'=>32,'class'=>'form-control')); ?>
			<?php echo $form->error($user,'password_repeat'); ?>
		</div>
	</div>

	<?php if($user_assignments): ?>
	<div class="form-group">
		<?php echo $form->labelEx($user,'status_id', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-3">
			<?php echo $form->dropDownList($user,'status_id', CHtml::listData(Status::model()->findAll(),'id','name'), array('class'=>'form-control'));?>
			<?php echo $form->error($user,'status_id'); ?>
		</div>
	</div>

	<?php if($update): ?>
	<div class="form-group">
		<label class="col-lg-2 control-label">Jawatan</label>
		<div class="col-lg-8">
			<div class="roles">
				<?php foreach($user->assignments as $a) {
					echo $this->renderPartial('includes/role_li',
						array(
							'user' => $user,
							'assignment' => $a,
						)
					);
				} ?>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<div class="form-group">
		<?php
			echo $this->renderPartial('includes/role_select',
				array(
					'user' => $user,
					'update' => $update,
				)
			);
		?>
	</div>
	<?php endif; ?>

	<div class="form-group">
		<label class="col-lg-2"></label>
		<div class="col-lg-8">
			<?php echo CHtml::submitButton($user->isNewRecord ? 'Daftar' : 'Simpan', array('class'=>'btn btn-primary')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->