<?php

$agama = ListAgama::model()->findAll();
$agama = CHtml::listData($agama, 'nama','nama');

$bangsa = ListBangsa::model()->findAll();
$bangsa = CHtml::listData($bangsa, 'nama','nama');

$negeri = ListNegeri::model()->findAll();
$negeri = CHtml::listData($negeri, 'list_state_nicename','list_state_nicename');

$daerah = ListDaerah::model()->findAll();
$daerah = CHtml::listData($daerah, 'list_district_name','list_district_name');


?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'orangasli-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal', 'role'=>'form'),
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ic', array('class'=>'col-lg-2 control-label text-right')); ?>
		<div class="col-lg-7">
		<?php echo $form->textField($model,'ic',array('maxlength'=>14, 'class'=>'form-control w150')); ?>
		<?php echo $form->error($model,'ic'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'nama', array('class'=>'col-lg-2 control-label text-right')); ?>
		<div class="col-lg-7">
		<?php echo $form->textField($model,'nama',array('maxlength'=>255, 'class'=>'form-control w300')); ?>
		<?php echo $form->error($model,'nama'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'namakeluarga', array('class'=>'col-lg-2 control-label text-right')); ?>
		<div class="col-lg-7">
		<?php echo $form->textField($model,'namakeluarga',array('maxlength'=>255, 'class'=>'form-control w300')); ?>
		<?php echo $form->error($model,'namakeluarga'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'dob', array('class'=>'col-lg-2 control-label text-right')); ?>
		<div class="col-lg-7">
		<?php echo $form->textField($model,'dob',array('maxlength'=>17, 'class'=>'form-control w200')); ?>
		<?php echo $form->error($model,'dob'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'keturunan', array('class'=>'col-lg-2 control-label text-right')); ?>
		<div class="col-lg-7">
		<?php echo $form->dropDownList($model,'keturunan',$bangsa, array('class'=>'form-control w200')); ?>
		<?php echo $form->error($model,'keturunan'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'agama', array('class'=>'col-lg-2 control-label text-right')); ?>
		<div class="col-lg-7">
		<?php echo $form->dropDownList($model,'agama', $agama , array('class'=>'form-control w200')); ?>
		<?php echo $form->error($model,'agama'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'jantina', array('class'=>'col-lg-2 control-label text-right')); ?>
		<div class="col-lg-7">
		<?php echo $form->dropDownList($model,'jantina', array('Lelaki'=>'Lelaki','Perempuan'=>'Perempuan','Tidak Diketahui'=>'Tidak Diketahui'),array('maxlength'=>20, 'class'=>'form-control w150')); ?>
		<?php echo $form->error($model,'jantina'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'alamat', array('class'=>'col-lg-2 control-label text-right')); ?>
		<div class="col-lg-7">
		<?php echo $form->textField($model,'alamat',array('maxlength'=>255, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'alamat'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'negeri', array('class'=>'col-lg-2 control-label text-right')); ?>
		<div class="col-lg-7">
		<?php echo $form->dropDownList($model,'negeri',$negeri,array('class'=>'form-control w300')); ?>
		<?php echo $form->error($model,'negeri'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'daerah', array('class'=>'col-lg-2 control-label text-right')); ?>
		<div class="col-lg-7">
		<?php echo $form->dropDownList($model,'daerah',$daerah ,array('class'=>'form-control w300')); ?>
		<?php echo $form->error($model,'daerah'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'poskod', array('class'=>'col-lg-2 control-label text-right')); ?>
		<div class="col-lg-7">
		<?php echo $form->textField($model,'poskod' ,array('class'=>'form-control w100')); ?>
		<?php echo $form->error($model,'poskod'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'status', array('class'=>'col-lg-2 control-label text-right')); ?>
		<div class="col-lg-7">
		<?php echo $form->textField($model,'status',array('maxlength'=>12, 'class'=>'form-control w100')); ?>
		<?php echo $form->error($model,'status'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'catatan', array('class'=>'col-lg-2 control-label text-right')); ?>
		<div class="col-lg-7">
		<?php echo $form->textArea($model,'catatan',array('form-groups'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'catatan'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-2 control-label"></div>
		<div class="col-lg-7">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Daftar' : 'Simpan', array('class'=>'btn btn-primary')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->