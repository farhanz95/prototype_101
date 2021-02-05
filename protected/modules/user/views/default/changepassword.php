<?php
/* @var $this DefaultController */
/* @var $model User */

$this->breadcrumbs=array(
    'Tukar Kata Laluan',
);

?>

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'user-form',
    'enableClientValidation'=>true,
    'enableAjaxValidation'=>false,
    'htmlOptions'=>array('class'=>'form-horizontal', 'role'=>'form'),
)); ?>

<section id="content" class="animated fadeIn">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
            <div class="panel panel-dark">
                <div class="panel-heading bg-dark">
                	<span class="glyphicons glyphicons-settings mr10"></span>Penukaran Kata Laluan
                </div>
                <div class="panel-body">

                <div class="alert alert-primary alert-sm alert-border-left light dismissable">
                    <span class="glyphicon glyphicon-exclamation-sign mr10"></span>
                    Sila masukkan keseluruhan input dan tekan butang <a class="text-dark">Simpan</a> untuk proses penukaran kata laluan
                </div>
                	
                    <table class="table table-bordered table-responsive">
                        <tr>
                            <td width="25%"><label class="bold pull-right">Kata Laluan Lama</label></td>
                            <td>
                            <?php echo $form->passwordField($user,'password',array('size'=>30,'maxlength'=>32,'class'=>'form-control w300')); ?>
                            <?php echo $form->error($user,'password'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="bold pull-right">Kata Laluan Baru</label></td>
                            <td>
                            <?php echo $form->passwordField($user,'password',array('size'=>30,'maxlength'=>32,'class'=>'form-control w300')); ?>
                            <?php echo $form->error($user,'password'); ?>    
                            </td>
                        </tr>
                        <tr>
                            <td><label class="bold pull-right">Ulang Kata Laluan Baru</label></td>
                            <td>
                            <?php echo $form->passwordField($user,'password',array('size'=>30,'maxlength'=>32,'class'=>'form-control w300')); ?>
                            <?php echo $form->error($user,'password'); ?>    
                            </td>
                        </tr>
                    </table>

                <?php echo CHtml::link('<i class="fa fa-upload mr10"></i>Simpan',array('index'),array('class'=>'btn btn-primary mt20')) ?>

                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->endWidget(); ?>