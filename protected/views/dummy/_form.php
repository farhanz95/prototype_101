<?php

$negeri = ListNegeri::model()->findAll();
$negeri = CHtml::listData($negeri, 'list_state_id','list_state_nicename');

$daerah = ListDaerah::model()->findAll();
$daerah = CHtml::listData($daerah, 'list_district_id','list_district_name');

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dummy-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal', 'role'=>'form'),
)); ?>

	<div class="alert alert-info alert-sm alert-border-left light alert-dismissable fontwn font2">
	<a class="glyphicon glyphicon-exclamation-sign mr10"></a>Bahagian yang bertanda <span class="required">*</span> adalah wajib diisi
	</div>

	<?php echo $form->errorSummary($model); ?>
 	
	 <div class="form-group">
		<?php echo $form->labelEx($model,'value1', array('class'=>'col-lg-3 control-label')); ?>
		<div class="col-lg-7">
		<?php echo $form->dropDownList($model, 'value1', $negeri, array('prompt'=>'Pilih Negeri', 'class'=>'form-control',
			'ajax'=>array(
				'type'=>'POST',
				'url'=>Yii::app()->createUrl('dummy/getprogramme'),
				'update'=>'#Dummy_value2'
			)
			)); ?>
		<?php echo $form->error($model,'value1'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'value2', array('class'=>'col-lg-3 control-label')); ?>
		<div class="col-lg-7">
		<?php echo $form->dropDownList($model, 'value2', array(), array('prompt'=>'Pilih Daerah', 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'value2'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-12">
		<?php echo CHtml::tag('button', array('class' => 'btn btn-primary'), $model->isNewRecord ? 'Simpan' :'Kemaskini');?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->