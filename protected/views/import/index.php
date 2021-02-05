<?php $this->breadcrumbs=array('Import / Export') ?>

<section id="content" class="">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<div class="panel">
				<div class="panel-heading bg-dark ">
					<span class="h-icon text-white-dark"><i class="fa fa-upload"></i></span>
					<span class="panel-title text-white-dark pl10">Import / Export</span>
				</div>

				
	<div class="panel-body">

	 <div class="alert alert-primary alert-border-left alert-dismissable">
		<div class="col-lg-1"><i class="fs50 glyphicons glyphicons-lightbulb"></i></div>
    Sila pilih data untuk di import dengan klik pada butang Import di bawah.<br>
    File import akan disimpan di folder [<span class="fw600">/_import/</span>] dan  di senaraikan di bawah. <br>
    Sistem hanya menerima file jenis document seperti doc, pdf, xls, cvs dan file gambar dengan tidak melebihi 30MB.</div>

        <div class="row pl10 mb20">
<?php echo CHtml::link('<i class="fa fa-upload mr10"></i>Import Data',array('/import/create'),array('class'=>'btn btn-system ml10')) ?>
<?php echo CHtml::link('<i class="fa fa-download mr10"></i>Export Data',array('/laporan/utama'),array('class'=>'btn btn-system ml10')) ?>
		</div>

        <div class="table-bordered table-responsive" id="backup-grid">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th id="backup-grid_c0">Bil</th><th id="backup-grid_c1">Nama</th><th id="backup-grid_c2">Size</th><th id="backup-grid_c3">Tarikh Import</th><th id="backup-grid_c4">Keterangan</th><th class="button-column" id="backup-grid_c5">Tindakan</th>
				</tr>
			</thead>
			<tbody>
				<tr class="odd">
					<td width="5%">1</td>
					<td><i class="fa fa-file-pdf-o text-danger fa-3x mr15"></i><span class="va-s">laporanpenduduk1.pdf</span></td>
					<td 0="width:10%">11 MB</td>
					<td>20-05-2016</td>
					<td>Laporan Penduduk Orang Asli Mengikut Negeri</td>
					<td style="width:15%"><a rel="tooltip" data-toggle="tooltip" title="" class="btn btn-success btn-xs mr5 approve-Modal" href="<?php echo Yii::app()->request->baseUrl ?>/index.php/laporan/utama" data-original-title="Export"><i class="fa fa-download"></i></a><a rel="tooltip" data-toggle="tooltip" title="" class="btn btn-primary btn-xs mr5" href="<?php echo Yii::app()->request->baseUrl ?>/index.php/laporan/utama" data-original-title="Lihat"><i class="fa fa-search"></i></a><a rel="tooltip" data-toggle="tooltip" title="" class="btn btn-danger btn-xs mr5" href="<?php echo Yii::app()->request->baseUrl ?>/index.php/backup/delete/1" data-original-title="Delete"><i class="fa fa-trash"></i></a>
					</td>
				</tr>
				<tr class="even">
					<td width="5%">2</td>
					<td><i class="fa fa-file-excel-o text-success fa-3x mr15"></i><span class="va-s">kadbancian.xls</span></td><td 0="width:10%">1 MB</td><td>20-05-2016</td><td>Senarai Keluarga Kad Bancian
					</td><td style="width:15%"><a rel="tooltip" data-toggle="tooltip" title="" class="btn btn-success btn-xs mr5 approve-Modal" href="<?php echo Yii::app()->request->baseUrl ?>/index.php/laporan/utama" data-original-title="Export"><i class="fa fa-download"></i></a><a rel="tooltip" data-toggle="tooltip" title="" class="btn btn-primary btn-xs mr5" href="<?php echo Yii::app()->request->baseUrl ?>/index.php/laporan/utama" data-original-title="Lihat"><i class="fa fa-search"></i></a><a rel="tooltip" data-toggle="tooltip" title="" class="btn btn-danger btn-xs mr5" href="<?php echo Yii::app()->request->baseUrl ?>/index.php/backup/delete/7" data-original-title="Delete"><i class="fa fa-trash"></i></a></td>
				</tr>
				<tr class="odd">
					<td width="5%">3</td>
					<td><i class="fa fa-file-word-o text-primary fa-3x mr15"></i><span class="va-s">kampungorangasli.xls</span></td><td 0="width:10%">1 MB</td><td>20-05-2016</td><td>Bilangan Kampung Dan Penduduk Orang Asli Negeri Sabah
					</td><td style="width:15%"><a rel="tooltip" data-toggle="tooltip" title="" class="btn btn-success btn-xs mr5 approve-Modal" href="<?php echo Yii::app()->request->baseUrl ?>/index.php/laporan/utama" data-original-title="Export"><i class="fa fa-download"></i></a><a rel="tooltip" data-toggle="tooltip" title="" class="btn btn-primary btn-xs mr5" href="<?php echo Yii::app()->request->baseUrl ?>/index.php/laporan/utama" data-original-title="Lihat"><i class="fa fa-search"></i></a><a rel="tooltip" data-toggle="tooltip" title="" class="btn btn-danger btn-xs mr5" href="<?php echo Yii::app()->request->baseUrl ?>/index.php/backup/delete/7" data-original-title="Delete"><i class="fa fa-trash"></i></a></td>
				</tr>
			</tbody>
		</table>
		<div class="dt-panelfooter clearfix"><div class="dataTables_info">Paparan 1 hingga 3 dari 3 keseluruhan</div>
		
		<div class="dataTables_paginate paging_simple_numbers"></div></div><div class="keys" style="display:none" title="<?php echo Yii::app()->request->baseUrl ?>/index.php/backup/index"><span>1</span><span>7</span></div>
</div>
				</div>

			</div>
		</div>
	</div>
</section>