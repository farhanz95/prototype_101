<?php 

Yii::app()->clientScript->registerScript('filter', "
$('.filter-button').click(function(){
    $('.filter-form').toggle();
    $('.form_2015').hide();
    $('.form_2016').hide();
});

$('.search-button').click(function(){
    $('.report-form').show();
});

");

?>

<?php

$this->breadcrumbs=array('Laporan');

$month = array('Januari','Februari','Mac','April','May','Jun','July','Ogos','September','Oktober','November','Disember');
$x=1;

 

 ?>


<style>

.paantable-bordered > thead > tr > th,
.paantable-bordered > tbody > tr > th,
.paantable-bordered > tfoot > tr > th,
.paantable-bordered > thead > tr > td,
.paantable-bordered > tbody > tr > td,
.paantable-bordered > tfoot > tr > td {
  border: 0px solid #eeeeee !important;
}

</style>


<section id="content" class="">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<div class="panel">
				<div class="panel-heading bg-dark ">
					<span class="h-icon text-white-dark"><i class="glyphicon glyphicon-stats"></i></span>
					<span class="panel-title text-white-dark pl10">Laporan</span>
				</div>

				<!-- Jenis Kapal, Jenis Sijil (Terma & Tahun) , Tahun, Bulan, Lokasi Pemeriksaan, Jumlah Kutipan Hasil-->

				<div class="panel-body">

				<div class="pl10"><span class="btn btn-system mb20 filter-button">Semakan Laporan Terperinci</span></div>

				<div class="filter-form" style="display:none">

					<div class="col-lg-12 mb20">
						<div class="col-lg-4">
							<select id="years" name="years" class="form-control" empty="-Select Report Year-" value="2015">

							<option value="" >-Pilih Tahun Laporan-</option>
							<?php 

							for($i=1; $i<=count($year); $i++)
							{
							    echo "<option value=".$yearFrom.">".$yearFrom++."</option>";
							}

							?> 

						    <option name="years"> </option>  

							</select> 

						</div>
						<div class="col-lg-4">
							<select class="form-control">
								<option value="" >-Pilih Bulan Laporan-</option>
								<?php foreach($month as $za) { ?>
								<option><?php echo $za; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>

					<div class="col-lg-8 pl20 mb20">
						<table class="table table-bordered table-responsive">
							<tr>
								<td width="10%" style="font-weight:bold">KELUARGA</td>
								<td width="50%">
								<select class="form-control">
								<option selected="selected">-Pilihan-</option>
								 
								</select>
								</td>
							</tr>
							<tr>
								<td width="10%" style="font-weight:bold">WARGANEGARA</td>
								<td width="50%">
								<select class="form-control">
								<option selected="selected">-Pilihan-</option>
								 
								</select>
								</td>
							</tr>
							<tr>
								<td width="10%" style="font-weight:bold">AGAMA</td>
								<td width="50%">
								<select class="form-control">
								<option selected="selected">-Pilihan-</option>
								 
								</select>
								</td>
							</tr>
							<tr>
								<td width="10%" style="font-weight:bold">STATUS</td>
								<td width="50%">
								<select class="form-control">
								<option selected="selected">-Pilihan-</option>
								 
								</select>
								</td>
							</tr>
						</table>
						<span class="btn btn-system mt20 search-button">Buat Carian</span>
					</div>


					<div class="report-form ml20" style="display:none">
						
						<table class="table table-bordered table-responsive">
							<tr style="background-color:#4A89DC ; color:white">
								<td>Bil</td>
								<td>Nama</td>
								<td>No. Kad Pengenalan</td>
								<td>Agama</td>
								<td>Bangsa</td>
								<td>Jantina</td>
								<td>Alamat</td>
							</tr>

							<tr>
								<td>1</td>
								<td>Kobin Talaha bin Abdullah</td>
								<td>780903024990</td>
								<td>Islam</td>
								<td>Kensiu</td>
								<td>Lelaki</td>
								<td>Kampong Lubuk Legong, Baling, Kedah</td>
							</tr>

							<tr>
								<td>2</td>
								<td>Arman bin Ajwad</td>
								<td>620325103552</td>
								<td>Islam</td>
								<td>Bateq</td>
								<td>Lelaki</td>
								<td>Kampung Orang Asli Ulu Batu, Ulu Yam, Batu Caves, Selangor</td>
							</tr>
						</table>


					</div>

				</div>

			</div>
		</div>
	</div>
</section>




