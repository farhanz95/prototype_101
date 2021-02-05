<?php 

Yii::app()->clientScript->registerScript('filter', "
$('.filter-button').click(function(){
    $('.filter-form').toggle();
     $('.1').hide();
    $('.2').hide();
    $('.3').hide();
    $('.4').hide();
});


");

?>

<?php

$this->breadcrumbs=array('Laporan');

$month = array('Januari','Februari','Mac','April','May','Jun','July','Ogos','September','Oktober','November','Disember');
$x=1;

 ?>

 <style>

.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  border: 1px solid #bbb !important;
  text-align: center;
}


</style>

<title>Highcharts Example</title>

<style type="text/css">
${demo.css}
</style>

<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/data.js"></script>
<script src="https://code.highcharts.com/mapdata/countries/my/my-all.js"></script>

<section id="content" class="">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<div class="panel">
				<div class="panel-heading bg-dark ">
					<span class="h-icon text-white-dark"><i class="glyphicon glyphicon-stats"></i></span>
					<span class="panel-title text-white-dark pl10">Laporan</span>
				</div>

				
				<div class="panel-body">

				<div class="pl10"><span class="btn btn-system mb20 filter-button">Semakan Laporan Terperinci</span></div>

				<div class="filter-form">

					<div class="col-lg-12 mb20">
						<div class="col-lg-12 pln">

							<select id="report" name="report" class="form-control wauto select2-single gui-input" >

				<option value="" >-Pilih Jenis Laporan-</option>
				<option value="1">Senarai Penduduk Orang Asli Yang Telah Selesai Cetakan Kad Bancian</option>
				<option value="2">Bilangan Kampung Dan Penduduk Orang Asli Mengikut Negeri</option>
				<option value="4" selected='selected'>Laporan Pendudukan Orang Asli Mengikut Negeri</option>
				<option value="3">Taburan Penduduk Orang Asli Mengikut 3 Suku Kaum Utama</option>
			    <option>Bilangan Kemiskinan Penduduk Orang Asli Mengikut Negeri</option>
			    <option>Rumusan Tanah Orang Asli</option>
			    <option>Keluasan Bertanam Di Kawasan Orang Asli Mengikut Jenis Tanaman</option>
			    <option>Bilangan Usahawan Orang Asli</option>
			    <option>Bilangan Peserta Orang Asli Mengikut Kursus</option>
			    <option>Rumusan Data Pelajar Orang Asli Bagi Sekolah 100% Orang Asli</option>
			    <option>Bilangan Enrolmen Pelajar Orang Asli Bagi Sekolah Rendah Dan Menengah</option>
			    <option>Keciciran Pelajar-pelajar Orang Asli Sekolah Rendah</option>
			    <option>Keciciran Pelajar-pelajar Orang Asli Ke Sekolah Menengah</option>
			    <option>Keciciran Pelajar-pelajar Orang Asli Sekolah Menengah</option>
			    <option>Bilangan kanak-kanak Orang Asli bagi kelas 3P, TASKA dan TABIKA</option>
			    <option>Data penuntut pelajar Orang Asli di IPTA,</option>

							</select> 

						</div>
					
					</div>

					<div class="col-lg-12 mb20">
						<div class="col-lg-4 pln">
							<select id="years" name="years" class="form-control select2-single gui-input" empty="-Select Report Year-" value="2015">

							<option value="" >-Pilih Tahun Laporan-</option>
							<option value="" >Keseluruhan Tahun</option>
							<?php 

							for($i=1; $i<=count($year); $i++)
							{
								if($yearFrom == "2015")
								{
									echo "<option value=".$yearFrom." selected='selected' >".$yearFrom++."</option>";
								}
								else
								{
							    echo "<option value=".$yearFrom.">".$yearFrom++."</option>";
								}
							}

							?> 

						    <option name="years"> </option>  

							</select> 

						</div>
						<div class="col-lg-4">
							<select class="form-control select2-single gui-input">
								<option value="" >-Pilih Bulan Laporan-</option>
								<option value="" selected='selected'>Keseluruhan Bulan</option>
								<?php foreach($month as $za) { ?>
								<option><?php echo $za; ?></option>
								<?php } ?>
							</select>
						</div>

					</div>

				</div>

					<div class="laporan4">
						<?php 
							$this->renderPartial('laporan4');
				 		?>
				 	</div>

					<div class="col-lg-12 mt20 laporan1" style="display:none">
						<?php 

							$this->renderPartial('laporan1');
						 ?>
					</div>

					<div class="laporan2" style="display:none">
						<?php $this->renderPartial('laporan2') ?>
					</div>

					<div class="laporan3" style="display:none">
						<?php 
							$this->renderPartial('laporan3');
						 ?>
					</div>

					
					 
				
				</div>

			</div>
		</div>
	</div>
</section>

<?php
Yii::app()->clientScript->registerScript(
    'form_laporan',
    "
    $('#1, #2, #3, #4, #5, #6, #7, #8, #9, #10').hide();
    $('.select2-single').select2();
    $('.select2').css({'width':'100%'});
    $('.select2-single').on('change', function() {
      if ( this.value == '1')
      {
      	$('#export-laporan').show();
        $('#1').show();
        $('#2').hide();
        $('#3').hide();
      }
    });
    ",
CClientScript::POS_READY
);
?>

<?php
Yii::app()->clientScript->registerScript(
    'utama',
    "
    $('.laporan4').show();
    $('#report').on('change', function() {
      if ( this.value == '1')
      {
        $('.laporan1').fadeIn();
        $('.laporan2').fadeOut();
        $('.laporan3').fadeOut();
        $('.laporan4').fadeOut();
      }
      else if ( this.value == '2')
      {
      	$('.laporan2').fadeIn();
        $('.laporan3').fadeOut();
	    $('.laporan1').fadeOut();
	    $('.laporan4').fadeOut();
      }
       else if ( this.value == '3')
      {
        $('.laporan3').fadeIn();
	    $('.laporan1').fadeOut();
	    $('.laporan2').fadeOut();
	    $('.laporan4').fadeOut();
      }
       else if ( this.value == '4')
      {
        $('.laporan4').fadeIn();
	    $('.laporan1').fadeOut();
	    $('.laporan3').fadeOut();
	    $('.laporan2').fadeOut();
      }
  
    });
    ",
CClientScript::POS_READY
);
?>

