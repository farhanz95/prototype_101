<?php
/* @var $this DefaultController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions'=>array('class'=>'form-horizontal', 'role'=>'form'),
)); ?>

<div class="panel-heading">
	<span class="fa fa-search mr10"></span>Carian
</div>
<div class="panel-body mb20">

	<div class="form-group">
		<?php echo $form->label($model,'login', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-5">
			<?php echo $form->textField($model,'login',array('size'=>30,'maxlength'=>30,'class'=>'form-control')); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'fullname', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-5">
			<?php echo $form->textField($model,'fullname',array('size'=>30,'maxlength'=>30,'class'=>'form-control')); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'email', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-5">
			<?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>30,'class'=>'form-control')); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'phone', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-5">
			<?php echo $form->textField($model,'phone',array('size'=>30,'maxlength'=>30,'class'=>'form-control')); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Status', array('class'=>'col-lg-2 control-label')); ?>
		<div class="col-lg-5">
			<?php echo $form->textField($model,'status_name',array('size'=>30,'maxlength'=>100,'class'=>'form-control')); ?>
		</div>
	</div>

	<div class="form-group">
		<label class="col-lg-2 control-label">
			Tarikh Didaftarkan
		</label>
		<div class="col-lg-2">
			<input type="text" class="form-control w150" placeholder="DARI">
		</div>
		<div class="col-lg-2">
			<input type="text" class="form-control w150" placeholder="HINGGA">
		</div>
	</div>

	<div class="form-group">
		<label class="col-lg-2"></label>
		<div class="col-lg-8">
			<?php echo CHtml::submitButton('Semak', array('class'=>'btn btn-default')); ?>
		</div>
	</div>

</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->