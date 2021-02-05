<?php $this->breadcrumbs=array('Tetapan Sistem') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<style>
ul.nav li{cursor:pointer;}
.tetapan-left{display:none;}
.ui-datepicker-year
{
 display:none !important;   
}

.table-bordered th,
.table-bordered td {
    border: 2px solid #aaa !important;
  }

.file {
  position: absolute;
  clip: rect(0px, 0px, 0px, 0px);
  display: block;
}
.labelfile {
  color: #333;
  background-color: #fff;
  display: inline-block;
  margin-bottom: 0;
  font-weight: 400;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  background-image: none;
  white-space: nowrap;
  padding: 6px 8px;
  font-size: 14px;
  line-height: 1.42857143;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

</style>

<script>
$(function() {
  $("#labelfile").click(function() {
    $("#imageupl").trigger('click');
  });
})

</script>

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

<section id="content" class="table-layout">
    <!-- begin: .tray-left -->
    <aside class="tray tray-left tray320 va-t pn" data-tray-height="match">
        <div class="p20">
            <h4 class="mt5"> Senarai Tetapan Sistem - <span class="fs14 fw400 text-muted">SPMOA</span></h4>
        </div>
        <div id="">
            <ul class="nav tray-nav tray-nav-border">
                <li class="penggal active">
                    <a>
                        <span class="fa fa-user fa-lg"></span> Konfigurasi Sistem
                    </a>
                </li>
            <!--     <li class="kad">
                    <a>
                        <span class="fa fa-credit-card fa-lg"></span>Kad Bancian
                    </a>
                </li> -->
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
                             Tarikh terakhir dikemaskini : 10/05/2016 
                            <div class="panel mb50 mt10 sort-disable" id="p0" data-panel-title="false" data-panel-fullscreen="false" data-panel-remove="false" data-panel-collapse="false" data-panel-fullscreen="false">

                                <div class="panel-heading">
                                    <span class="panel-icon"><i class="fa fa-user"></i>
                                    </span>
                                    <span class="panel-title"> Tetapan Sistem SPMOA</span>
                                </div>
                                <div class="panel-body">
                                	 <?php $form=$this->beginWidget('CActiveForm', array(
                                        'id'=>'penggalsatu-form',
                                        'enableAjaxValidation'=>false,
                                        'htmlOptions'=>array('class'=>'form-horizontal', 'role'=>'form'),
                                    )); ?>
 

                                    <table class="table table-bordered table-responsive">
                                    <tr>
                                    	<td class="bold">Nama Sistem</td>
                                    	<td><input type="text" value="SPMOA" class="form-control wauto"></td>
                                    </tr>
                                    <tr>
                                    	<td class="bold">Nama Penuh Sistem</td>
                                    	<td><input type="text" value="SISTEM PENGURUSAN MAKLUMAT ORANG ASLI" class="form-control wauto"></td>
                                    </tr>
                                    <tr>
                                        <td class="bold">Status Sistem</td>
                                        <td>
                                            <select class="form-control wauto">
                                                <option>Online</option>
                                                <option>Offline</option>
                                           </select>     
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bold">Mesej Status Offline</td>
                                        <td>
                                            <textarea class="form-control">Harap Maaf , Sistem Ini Sedang Dibaikpulih
                                            </textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bold">Logo Log Masuk Sistem</td>
                                        <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl ?>/css/img/logos/logo_spmoa_login.png" class="w100">
                                        <span class="btn btn-default"><span class="fa fa-file mr10"></span>logo_spmoa_login.png</span>
                                        <a class="glyphicons glyphicons-settings text-primary ml20 tukarloginlogo-button" rel="tooltip" data-toggle="tooltip" data-original-title="Tukar Logo"></a>
                                        <div class="tukarloginlogo-form" style="display:none">
                                        </br>
                                            <font class="text-danger">Pastikan Anda Sudah Membuat Backup Logo Lama</br>Sebelum Menukar Ke Logo Sistem Baru</font>
                                        <input name="imageupl" type="file" id="imageupl" class="file" />
    <label class="labelfile" id="labelfile"><i class="icon-download-alt"></i><a class="btn btn-default"><span class="fa fa-upload mr10"></span>MUATNAIK FILE</a></label>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bold">Logo Menu Sistem</td>
                                        <td>
                                        <img src="<?php echo Yii::app()->request->baseUrl ?>/css/img/logos/logo_spmoa.png" class="w100">
                                        <span class="btn btn-default"><span class="fa fa-file mr10"></span>logo_spmoa.png</span>
                                        <a class="glyphicons glyphicons-settings text-primary ml20 tukarsistemlogo-button" rel="tooltip" data-toggle="tooltip" data-original-title="Tukar Logo"></a>
                                        <div class="tukarsistemlogo-form" style="display:none">
                                        </br>
                                             <font class="text-danger">Pastikan Anda Sudah Membuat Backup Logo Lama</br>Sebelum Menukar Ke Logo Sistem Baru</font>
                                        <input name="imageup2" type="file" id="imageup2" class="file" />
    <label class="labelfile" id="labelfile"><i class="icon-download-alt"></i><a class="btn btn-default"><span class="fa fa-upload mr10"></span>MUATNAIK FILE</a></label>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bold">Tetapan Akses Sistem</td>
                                        <td>
                                            <select class="form-control wauto">
                                                <option>Pengguna Dalam Sahaja</option>
                                                <option>Pengguna Dalam Dan Luar</option>
                                           </select>  
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bold">Maksimum Pengguna Serentak</td>
                                        <td>
                                            <input type="number" class="form-control w100" value="20">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bold">Bahasa Pengantara Sistem</td>
                                        <td>
                                           <span class="flag-xs flag-es"></span> Bahasa Melayu <a class="glyphicons glyphicons-settings text-primary ml20 tukarbahasa-button" rel="tooltip" data-toggle="tooltip" data-original-title="Tukar Tetapan Bahasa"></a>
                                           <div class="tukarbahasa-form" style="display:none">
                                           </br>
                                               Tukar Ke Bahasa   
                                               <select class="form-control wauto">
                                                    <option>English</option>
                                                    <option>Bahasa Negrito</option>
                                                    <option>Bahasa Sanoi</option>
                                                    <option>Bahasa Melayu Asli</option>
                                               </select>      
                                            </div>
                                        </td>
                                    </tr>
                                    
                                    </table>

                                </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php $this->endWidget(); ?>

