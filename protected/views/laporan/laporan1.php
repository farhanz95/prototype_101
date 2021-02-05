<?php  

	// $orangAsli = Yii::app()->db->createCommand()
	// ->select('o.*, l.nama as pekerjaan_nama')
	// ->from('orangasli o')
	// ->leftjoin('list_pekerjaan l','o.pekerjaan=l.pekerjaan_id') 
	// ->queryAll();
	 
	// $count = 1; 
 ?>

<legend>Senarai Keluarga Orang Asli Yang Telah Selesai Cetakan Kad Bancian 2016</legend>

	<table class="table table-bordered table-responsive">
		 
		<tr  style="background-color:#0182C6 ; color:white">
			<td>Bil</td>
			<td>Nama KIR</td>
			<td>Kad Pengenalan KIR</td>
			<td>Alamat</td>
			<td>Jantina KIR</td>
			<td>Pekerjaan KIR</td>
			<td>Pendapatan</td>
		</tr>
		<tr>
			<td>1</td>
			<td>Semai A/L Gading</td>
			<td>751102042199</td>
			<td>No 121 Jalan Kintak, Kampung Tanjung Bachik</td>
			<td>Lelaki</td>
			<td>Pengajar</td>
			<td>2500</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Ali Bin Abu</td>
			<td>900503093848</td>
			<td>No 08 Jalan Tamingsari, Kampung Memerang</td>
			<td>Lelaki</td>
			<td>Buruh</td>
			<td>2500</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Ali Kassim Bin Razali</td>
			<td>500101049249</td>
			<td>Lot B No 123 Taman Perdana Impian, Delta Felda</td>
			<td>Lelaki</td>
			<td>Kontraktor</td>
			<td>2500</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Parlima A/L Ripana</td>
			<td>891110044197	</td>
			<td>B-1-2 Taman Kilauan Gading, Kampung Jaria</td>
			<td>Perempuan</td>
			<td>Juruteknik</td>
			<td>2500</td>
		</tr>
	</table>

	<div class="col-lg-12">

    <div class="col-lg-2">
    	<a href="javascript:window.print()" class="btn btn-default mt10 mr10"><i class="fa fa-print pr5"></i> Cetak</a>
    </div>
    <div class="col-lg-8 pt10">
        Export &nbsp; : &nbsp;
        <a href="" rel="tooltip" data-toggle="tooltip" data-original-title="Export Ke Word" class="va-b fa fa-file-word-o fs30 text-primary mr5"></a>
        <a href="" rel="tooltip" data-toggle="tooltip" data-original-title="Export Ke Excel" class="va-b fa fa-file-excel-o fs30 text-success mr5"></a>
        <a href="" rel="tooltip" data-toggle="tooltip" data-original-title="Export Ke PDF" class="va-b fa fa-file-pdf-o fs30 text-danger mr5"></a>
        <a class="btn btn-default br3 va-b" rel="tooltip" data-toggle="tooltip" data-original-title="Export Ke CSV"><span class="fa fa-share mr5"></span>CSV</a>
        <a class="btn btn-primary br3 va-b" rel="tooltip" data-toggle="tooltip" data-original-title="Export Ke Image"><span class="fa fa-picture-o fa-lg mr10"></span><span class="fa fa-download va-b"></span></a>
    </div>
     
	</div>
 

