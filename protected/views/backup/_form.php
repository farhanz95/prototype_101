<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'backup-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form')
)); ?>

<?php 

 
 ?>
 
	<div class="form-group">
		<div class="col-lg-12">
			
    </div>

	<?php echo $form->errorSummary($model); ?>
 
 	<?php if($model->isNewRecord) { ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'name',array('class'=>'col-lg-3 control-label')); ?>
		<div class="col-lg-3">
		<?php echo $form->dropDownList($model,'name' , $arraytable ,array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'name'); ?>
		</div>
	</div>

	<?php }else { ?>
	<div class="form-group">
		<?php echo $form->labelEx($model,'Data',array('class'=>'col-lg-3 control-label')); ?>
		<div class="col-lg-5">
		<?php echo $form->textField($model,'name', array('class'=>'form-control', 'disabled'=>'true')); ?>
		<?php echo $form->error($model,'name'); ?>
		</div>
	</div>
	<?php };  ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Keterangan',array('class'=>'col-lg-3 control-label')); ?>
		<div class="col-lg-6">
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'description'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-3"></div>
			<div class="col-lg-7">
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Simpan', array('class'=>'btn btn-success')); ?>
			</div>
	</div>


<?php $this->endWidget(); ?>

</div><!-- form -->