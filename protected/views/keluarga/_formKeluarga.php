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

<div class="alert alert-sm alert-border-left alert-primary light alert-dismissable">
		<font size="2em">
		<a class="glyphicon glyphicon-exclamation-sign mr10"></a>
		Jika pendaftar mempunyai keluarga yang sudah berdaftar dalam sistem, sila masukkan <a class="text-dark">No Rujukan</a> atau data <a class="text-dark">Kad Pengenalan</a> keluarga yang sudah berdaftar
		</font>
</div>

<!-- <table class="table table-bordered table-responsive mb20">
	<tr>
		<td class="w200 text-right bold">No Rujukan</td>
		<td><input type="text" name="norujukan" id="norujukan" class="form-control w200"></td>
	</tr>
</table>

<div class="col-lg-12 mb20">
<div class="col-lg-2"></div>
<div class="col-lg-10">
<font size="2em" class="text-danger maklumansalah2" style="display:none">No Rujukan Ini Tiada Dalam Sistem</font>
<font size="2em" class="text-danger maklumanbetul2" style="display:none">No Rujukan Ini Sah Didaftarkan Atas Keluarga WIRAWAN</font>
<div class="maklumanbetul2" style="display:none">
	<a class="btn btn-default">
		<span class="fa fa-group mr10"></span>WIRAWAN
		<a class="btn btn-xs btn-primary ml10 va-b" href="view/1" rel="tooltip" data-toggle="tooltip" data-original-title="Lihat Profil"><span class="fa fa-search"></span></a>
		<a class="btn btn-xs btn-info ml10 va-b" href="kemaskinidaftarkeluarga/1" rel="tooltip" data-toggle="tooltip" data-original-title="Kemaskini"><span class="fa fa-pencil"></span></a>
		<a class="btn btn-xs btn-success ml10 va-b" href="view/1" rel="tooltip" data-toggle="tooltip" data-original-title="Lihat Carta Keluarga"><span class="glyphicons glyphicons-group"></span></a>
	</a>
</div>
</div>
</div> -->

<table class="table table-bordered table-responsive mb20 ">
	<tr>
		<td class="w300 text-right bold">No Kad Pengenalan / No Rujukan</td>
		<td><input type="text" name="noic" id="noic" class="form-control w200"></td>
	</tr>
	<tr>
	</tr>
		<td class="w200 text-right bold">Hubungan</td>
		<td>
			<select class="form-control w200">
				<option>-Keluarga-</option>
				<option>Ibu / Bapa</option>
				<option>Adik Beradik</option>
				<option>Datuk / Nenek</option>
			</select>
		</td>
	<tr>
		<td></td>
		<td>
<font size="2em" class="text-danger maklumansalah" style="display:none">No Rujukan Ini Tiada Dalam Sistem</font>
<font size="2em" class="text-primary maklumanbetul" style="display:none">No Rujukan Ini Sah Didaftarkan Atas Keluarga WIRAWAN</font>

<div class="maklumanbetul" style="display:none">
	<a class="btn btn-default">
		<span class="fa fa-group mr10"></span>WIRAWAN
		<a class="btn btn-xs btn-primary ml10 va-b" href="view/1" rel="tooltip" data-toggle="tooltip" data-original-title="Lihat Profil"><span class="fa fa-search"></span></a>
		<a class="btn btn-xs btn-info ml10 va-b" href="kemaskinidaftarkeluarga/1" rel="tooltip" data-toggle="tooltip" data-original-title="Kemaskini"><span class="fa fa-pencil"></span></a>
		<a class="btn btn-xs btn-success ml10 va-b" href="view/1" rel="tooltip" data-toggle="tooltip" data-original-title="Lihat Carta Keluarga"><span class="glyphicons glyphicons-group"></span></a>
	</a>
</div>
		</td>
	</tr>
</table>

<div class="alert alert-sm alert-border-left alert-primary light alert-dismissable">
		<font size="2em">
		<a class="glyphicon glyphicon-exclamation-sign mr10"></a>
		Jika tiada, klik pada butang di bawah untuk daftar <a class="text-dark">Keluarga Orang Asli</a> yang baru
		</font>
</div>

<?php echo CHtml::link('<span class="fa fa-group mr10"></span>Daftar Keluarga Orang Asli',array('/keluarga/daftarkeluarga'),array('class'=>'btn btn-primary br30')) ?>



<?php
Yii::app()->clientScript->registerScript(
    'form_report',
    "
    $('.maklumansalah').hide();
    $('.maklumanbetul').hide();

    $('#noic').on('change', function() {
      if ( this.value == '0321456789')
      {
      	$('.maklumansalah').hide();
        $('.maklumanbetul').fadeIn();
      }
      else
      {
      	$('.maklumanbetul').hide();
      	$('.maklumansalah').fadeIn();
      }
    });

     $('#norujukan').on('change', function() {
      if ( this.value == '1')
      {
      	$('.maklumansalah2').hide();
        $('.maklumanbetul2').fadeIn();
      }
      else
      {
      	$('.maklumanbetul2').hide();
      	$('.maklumansalah2').fadeIn();
      }
    });
    ",
CClientScript::POS_READY
);
?>