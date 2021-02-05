<?php

$this->breadcrumbs=array(
	'Orang Asli'=>array('index'),
	'Kemaskini Pendaftaran Keluarga',
);

?>

<?php

$agama = ListAgama::model()->findAll();
$agama = CHtml::listData($agama, 'id','nama');

$kaum = ListBangsa::model()->findAll();
$kaum = CHtml::listData($kaum, 'id','nama');

$negeri = ListNegeri::model()->findAll();
$negeri = CHtml::listData($negeri, 'list_state_id','list_state_nicename');

$daerah = ListDaerah::model()->findAll();
$daerah = CHtml::listData($daerah, 'list_district_id','list_district_name');

$etnik = ListBangsa::model()->findAll();
$etnik = CHtml::listData($etnik, 'jenis_bangsa','jenis_bangsa');

$jawatan = ListPekerjaan::model()->findAll();
$jawatan = CHtml::listData($jawatan, 'pekerjaan_id','nama');
 
?>

<style>
ul.nav li{cursor:pointer;}
.tetapan-left{display:none;}
.ui-datepicker-year
{
 display:none !important;   
}
</style>

<?php 

Yii::app()->clientScript->registerScript('tukarbahasa', "
$('.tukarbahasa-button').click(function(){
    $('.tukarbahasa-form').toggle();
});

$('.tukarloginlogo-button').click(function(){
    $('.tukarloginlogo-form').toggle();
});

$('.tukarsistemlogo-button').click(function(){
    $('.tukarsistemlogo-form').toggle();
});


");

?>

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'keluarga-form',
    'enableAjaxValidation'=>false,
    'htmlOptions'=>array('class'=>'form-horizontal', 'role'=>'form'),
)); ?>

<section id="content" class="table-layout">
    <!-- begin: .tray-left -->
    <aside class="tray tray-left tray320 va-t pn" data-tray-height="match">
        <div class="p20">
            <h4 class="mt5"> Kod Rujukan - <span class="fs14 label label-success">320456789</span></h4>
        </div>
        <div id="">
            <ul class="nav tray-nav tray-nav-border">
                <li class="penggal active">
                    <a class="prn pl15"> 
                        A. MAKLUMAT ASAS KETUA ISI RUMAH (KIR)
                    </a>
                </li>
                <li class="profil_kir">
                    <a class="prn pl15"> 
                        B. PROFIL KETUA ISI RUMAH (KIR)
                    </a>
                </li>
                <li class="penggal">
                    <a class="prn pl15"> 
                        C. KELUASAN DAN STATUS TANAH YANG DIUSAHAKAN
                    </a>
                </li>
                <li class="penggal">
                    <a class="prn pl15"> 
                        D. BUTIR-BUTIR TEMPAT KEDIAMAN
                    </a>
                </li>
                <li class="penggal">
                    <a class="prn pl15"> 
                        E. MAKLUMAT BANTUAN PROJEK PEMBANGUNAN RAKYAT TERMISKN (PPRT)
                    </a>
                </li>
                <li class="penggal">
                    <a class="prn pl15"> 
                        F. PROFIL AHLI ISI KELUARGA (AIR)
                    </a>
                </li>
                <li class="penggal">
                    <a class="prn pl15"> 
                        G. PENDAPATAN ISI RUMAH DALAM TEMPOH 12 BULAN YANG LALU
                    </a>
                </li>
                <li class="penggal">
                    <a class="prn pl15"> 
                        H. MAKLUMAT PENDAFTARAN
                    </a>
                </li>
                <li class="penggal">
                    <a class="prn pl15"> 
                        I. HELAIAN KERJA KIR
                    </a>
                </li>
                <li class="penggal">
                    <a class="prn pl15"> 
                        J. HELAIAN KERJA AIR
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <!-- end: .tray-left -->
    <div class="tray tray-center va-t posr">
        <div class="admin-panels mn pn">
            <div class="row">
                <div class="col-sm-12 mw800 admin-grid">
                    
                    <div class="row tetapan-left penggal-tab" style="display:block;"> 

                    <div class="col-md-12 admin-grid">
                    <div class="pull-right">Tarikh Akhir Dikemaskini Pada : <b> 30-05-2016 11:42:26 </b></div>
                        <div class="panel mt20 mb50 sort-disable" id="p0" data-panel-title="false" data-panel-fullscreen="false" data-panel-remove="false" data-panel-collapse="false" data-panel-fullscreen="false">
                            <div class="panel-heading">
                                <span class="panel-icon"><i class="fa fa-group"></i>
                                </span>
                                <span class="panel-title"> Maklumat Asas Ketua Isi Rumah (KIR) </span>
                            </div>
                            <div class="panel-body">

                            <table class="table table-bordered table-responsive mb20">
                            <tr>
                                <td width="30%"><?php echo $form->labelEx($model,'nama_kir'); ?></td>
                                <td>
                                <?php echo $form->textField($model,'nama_kir',array('class'=>'form-control wauto')); ?>
                                <?php echo $form->error($model,'nama_kir'); ?>
                                </td>
                            </tr>
                             <tr>
                                <td width="30%"><?php echo $form->labelEx($model,'kp_baru'); ?></td>
                                <td>
                                <?php echo $form->textField($model,'kp_baru',array('class'=>'form-control w200')); ?>
                                <?php echo $form->error($model,'kp_baru'); ?>
                                </td>
                            </tr>
                             <tr>
                                <td width="30%"><?php echo $form->labelEx($model,'kp_lama'); ?></td>
                                <td>
                                <?php echo $form->textField($model,'kp_lama',array('class'=>'form-control w200')); ?>
                                <?php echo $form->error($model,'kp_lama'); ?>
                                </td>
                            </tr>
                             <tr>
                                <td width="30%"><?php echo $form->labelEx($model,'warna_kp'); ?></td>
                                <td>
                                <?php echo $form->radioButtonList($model,'warna_kp',array('Biru'=>'Biru','Merah'=>'Merah')); ?>
                                <?php echo $form->error($model,'warna_kp'); ?>
                                </td>
                            </tr>
                            <tr>
                                <td width="30%"><?php echo $form->labelEx($model,'alamat_kir'); ?></td>
                                <td>
                                <?php echo $form->textArea($model,'alamat_kir',array('class'=>'form-control wauto')); ?>
                                <?php echo $form->error($model,'alamat_kir'); ?>
                                </td>
                            </tr>
                             <tr>
                                <td width="30%"><?php echo $form->labelEx($model,'poskod'); ?></td>
                                <td>
                                <?php echo $form->textField($model,'poskod',array('class'=>'form-control w100')); ?>
                                <?php echo $form->error($model,'poskod'); ?>
                                </td>
                            </tr>
                             <tr>
                                <td width="30%"><?php echo $form->labelEx($model,'negeri'); ?></td>
                                <td>
                                <?php echo $form->dropDownList($model,'negeri', $negeri ,array('class'=>'form-control wauto', 'empty'=>'[Pilih]')); ?>
                                <?php echo $form->error($model,'negeri'); ?>
                                </td>
                            </tr>
                             <tr>
                                <td width="30%"><?php echo $form->labelEx($model,'daerah'); ?></td>
                                <td>
                                <?php echo $form->dropDownList($model,'daerah', $daerah ,array('class'=>'form-control wauto', 'empty'=>'[Pilih]')); ?>
                                <?php echo $form->error($model,'daerah'); ?>
                                </td>
                            </tr>
                             <tr>
                                <td width="30%"><?php echo $form->labelEx($model,'mukim'); ?></td>
                                <td>
                                <?php echo $form->textField($model,'mukim',array('class'=>'form-control wauto', 'value'=>'Jalan Kintak')); ?>
                                <?php echo $form->error($model,'mukim'); ?>
                                </td>
                            </tr>
                             <tr>
                                <td width="30%"><?php echo $form->labelEx($model,'kampung'); ?></td>
                                <td>
                                <?php echo $form->textField($model,'kampung',array('class'=>'form-control wauto', 'value'=>'Kampung Tanjung Bachik')); ?>
                                <?php echo $form->error($model,'kampung'); ?>
                                </td>
                            </tr>
                             <tr>
                                <td width="30%"><?php echo $form->labelEx($model,'status_perjawatan'); ?></td>
                                <td>
                                <?php echo $form->dropDownList($model,'status_perjawatan', $jawatan,array('class'=>'form-control wauto', 'empty'=>'[Status Perjawatan]')); ?>
                                <?php echo $form->error($model,'status_perjawatan'); ?>
                                </td>
                            </tr>
                             <tr>
                                <td width="30%"><?php echo $form->labelEx($model,'kampung_jkkk'); ?></td>
                                <td>
                                <?php echo $form->textField($model,'kampung_jkkk',array('class'=>'form-control wauto')); ?>
                                <?php echo $form->error($model,'kampung_jkkk'); ?>
                                </td>
                            </tr>
                           
                             <tr>
                                <td width="30%"><?php echo $form->labelEx($model,'parlimen'); ?></td>
                                <td>
                                <?php echo $form->dropDownList($model,'parlimen', $negeri ,array('class'=>'form-control wauto', 'empty'=>'[Pilih]')); ?>
                                <?php echo $form->error($model,'parlimen'); ?>
                                </td>
                            </tr>
                             <tr>
                                <td width="30%"><?php echo $form->labelEx($model,'dun'); ?></td>
                                <td>
                                <?php echo $form->dropDownList($model,'dun', $daerah ,array('class'=>'form-control wauto', 'empty'=>'[Pilih]')); ?>
                                <?php echo $form->error($model,'dun'); ?>
                                </td>
                            </tr>
                            </table>

                            <?php echo CHtml::link('<i class="fa fa-arrow-left mr10"></i>Kembali',array('/keluarga/index'),array('class'=>'btn btn-primary br24')) ?>

                            <?php echo CHtml::link('<i class="fa fa-arrow-right mr10"></i>Berikut',array('/keluarga/index'),array('class'=>'btn btn-info pull-right br24')) ?>

<?php echo CHtml::tag('button', array('class' => 'btn btn-alert br24 mr20 pull-right'), $model->isNewRecord ? '<i class="fa fa-upload mr10"></i> Simpan' :'<i class="fa fa-pencil mr10"></i> Kemaskini ');?>
                           
                            </div>
                        </div>
                    </div>

                    </div>

                    <div class="row tetapan-left profil_kir-tab"> 

                    <div class="col-md-12 admin-grid">
                            <div class="panel mt20 mb50 sort-disable" id="p0" data-panel-title="false" data-panel-fullscreen="false" data-panel-remove="false" data-panel-collapse="false" data-panel-fullscreen="false">
                                <div class="panel-heading">
                                    <span class="panel-icon"><i class="fa fa-group"></i>
                                    </span>
                                    <span class="panel-title"> Profil Ketua Isi Rumah (KIR) </span>
                                </div>
                                <div class="panel-body">

                                </div>
                            </div>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php
Yii::app()->clientScript->registerScript(
    'tetapansistem', 
    "
    $('li').click(function(){
        var listclass = $(this).attr('class').split(' ');
        // If this isn't already active
        if (!$(this).hasClass('active')) {
            $('.tetapan-left').slideUp('slow');
            $('.'+listclass[0]+'-tab').slideDown('slow');

            // Remove the class from anything that is active
            $('li.active').removeClass('active');

            // And make this active
            $(this).addClass('active');
        }
    });

    $(document).ready(ajustamodal);
    $(window).resize(ajustamodal);
    function ajustamodal() {
        var altura = $(window).height() - 140;
        $('.ativa-scroll').css({'height':altura,'overflow-y':'auto'});
    }
    ",
    CClientScript::POS_READY
);
?>

<?php $this->endWidget(); ?>