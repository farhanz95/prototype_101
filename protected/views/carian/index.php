<?php $this->breadcrumbs=array('Carian') ?>

<section id="content">
	<div class="panel">
		<div class="panel panel-dark">
			<div class="panel-heading">
				<i class="fa fa-user-plus mr10"></i> Semakan Orang Asli
			</div>

			<div class="panel-body">

		<div class="col-lg-12 pln mb20">

		<div class="col-lg-5 pln">
		<input type="text" class="form-control w400" id="carian" name="carian" placeholder="Carian melalui no rujukan / kad pengenalan ..">
		<font size="2em" class="text-danger maklumansalah" style="display:none">No Rujukan Ini Tiada Dalam Sistem</font>
		<font size="2em" class="text-primary maklumanbetul" style="display:none">No Rujukan Ini Sah Didaftarkan Atas Nama ARJUNA A/L WIRAWAN</font>
		</div>

		<div class="col-lg-7 maklumanbetul" style="display:none">

		<a class="btn btn-default">
			<span class="fa fa-user mr10"></span>ARJUNA A/L WIRAWAN
			<a class="btn btn-xs btn-primary ml10 va-b" rel="tooltip" data-toggle="tooltip" data-original-title="Lihat Profil" href="<?php echo Yii::app()->request->baseurl ?>/index.php/orangasli/view/1"><span class="fa fa-search"></span></a>
			<a class="btn btn-xs btn-info ml10 va-b" rel="tooltip" data-toggle="tooltip" data-original-title="Tambah Data" href="<?php echo Yii::app()->request->baseurl ?>/index.php/orangasli/tambahdata/1"><span class="fa fa-pencil"></span></a>
			<a class="btn btn-xs btn-success ml10 va-b" rel="tooltip" data-toggle="tooltip" data-original-title="Lihat Carta Keluarga"><span class="glyphicons glyphicons-group"></span></a>
		</a>

		</div>
 
		</div>

		<div class="col-lg-12 pln">

			<div class="col-lg-8 pln">
				<div class="panel-heading"><span class="fa fa-search mr10"></span>Carian Terperinci</div>
				<div class="panel-body">

					<div class="col-lg-12">
						<label class="col-lg-4 pln text-right bold pt8">Nama Keluarga Orang Asli</label>
						<div class="col-lg-6"><input type="text" class="form-control wauto"></div>
					</div>
					<div class="col-lg-12 mt10">
						<label class="col-lg-4 pln text-right bold pt8">Tarikh Didaftarkan</label>
						<div class="col-lg-3">
							<input type="text" class="form-control" placeholder="MULA TARIKH">
						</div>
						<div class="col-lg-3">
							<input type="text" class="form-control" placeholder="AKHIR TARIKH">
						</div>
					</div>
					<div class="col-lg-12 mt10">
						<label class="col-lg-4 pln text-right bold pt8">Bangsa</label>
						<div class="col-lg-6">
							<select class="form-control wauto">
								<option>-Semua-</option>
								<option>Negrito</option>
								<option>Sanoi</option>
								<option>Melayu Asli</option>
							</select>
						</div>
					</div>
					<div class="col-lg-12 mt10">
						<label class="col-lg-4 pln text-right bold pt8">Suku Kaum</label>
						<div class="col-lg-6">
							<select class="form-control wauto">
								<option>-Semua-</option>
								<option>Jakoi</option>
								<option>Katok</option>
								<option>Mai Mayu</option>
							</select>
						</div>
					</div>
					<div class="col-lg-12 mt10">
						<label class="col-lg-4 pln text-right bold pt8">Jantina</label>
						<div class="col-lg-2 pt8">
							<input type="radio" name="jantina"> Semua
						</div>
						<div class="col-lg-2 pt8">
							<input type="radio" name="jantina"> Lelaki
						</div>
						<div class="col-lg-3 pt8">
							<input type="radio" name="jantina"> Perempuan
						</div>
					</div>
					<div class="col-lg-12 mt10">
						<label class="col-lg-4 pln text-right bold pt8">Status</label>
						<div class="col-lg-6">
							<select class="form-control wauto">
								<option>-Semua-</option>
								<option>Baru Didaftarkan</option>
								<option>Menunggu Pendaftaran Ahli Keluarga</option>
								<option>Selesai Pendaftaran</option>
							</select>
						</div>
					</div>
					<div class="col-lg-12 mt20">
						<div class="col-lg-4"></div>
						<div class="col-lg-6">
							<a href="../orangasli/1" class="btn btn-primary br3"><span class="fa fa-search mr10"></span>Buat Carian</a>
						</div>
					</div>
				</div>
			</div>

		</div>

<?php
Yii::app()->clientScript->registerScript(
    'form_check',
    "
    $('.maklumansalah').hide();
    $('.maklumanbetul').hide();

    $('#carian').on('change', function() {
      if ( this.value == '010101016199')
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
    ",
CClientScript::POS_READY
);
?>
			 