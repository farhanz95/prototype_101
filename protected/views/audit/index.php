<?php

$this->breadcrumbs=array('Jejak Audit');

?>

<style>

.pagination {
  display: inline-block;
  padding-left: 0;
  margin: 0px 0 !important;
  border-radius: 1px;
}

</style>

<section id="content" class="">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<div class="panel">
				<div class="panel-heading bg-dark ">
					<span class="h-icon text-white-dark"><i class="glyphicon glyphicon-list"></i></span>
					<span class="panel-title text-white-dark pl10">Jejak Audit</span>
				</div>

				<div class="panel-body">

				<table class="table table-bordered table-responsive">
				<thead>
				<tr style="background-color:#4A89DC ; color:white">
					<th width='5%'>ID</th><th width='15%'>Tarikh / Masa</th>
					<th width="10%">Saluran Browser</th>
					<th width="15%">Transaksi Data</th>
					<th width="12%">Pengguna</th>
					<th width="17%">Alamat IP</th>
				</tr>
				<tr class="filters">
					<td>&nbsp;</td>
					<td><input placeholder="Carian Tarikh" class="form-control" name="AuditTrail[datetime]" id="AuditTrail_datetime" type="text"></td>
					<td><input placeholder="Carian" class="form-control" name="AuditTrail[mode]" id="AuditTrail_mode" type="text"></td>
					<td><input placeholder="Carian" class="form-control" name="AuditTrail[transact_statement]" id="AuditTrail_transact_statement" type="text"></td>
					<td><input placeholder="Carian" class="form-control" name="AuditTrail[user]" id="AuditTrail_user" type="text" maxlength="255"></td>
					<td><input placeholder="Carian" class="form-control" name="AuditTrail[ip_address]" id="AuditTrail_ip_address" type="text" maxlength="255"></td>
				</tr>
				</thead>
				<tbody>
				<tr class="odd">
				<td width="5%">1</td><td>2015-12-24 13:44:49</td><td>Chrome</td><td>Log Masuk Pengguna</td><td>Pejabat</td><td>192.168.1.234</td></tr>
				<tr class="even selected">
				<td width="5%">2</td><td>2016-01-01 10:24:16</td><td>Mozilla Firefox</td><td>Pengemaskinian Tetapan Akses</td><td>Pentadbir</td><td>192.168.1.124</td></tr>
				<tr class="odd">
				<td width="5%">3</td><td>2016-01-02 10:35:18</td><td>Mozilla Firefox</td><td>Pengubahsuaian Sistem</td><td>Pentadbir</td><td>192.168.1.21</td></tr>
				<tr class="even">
				<td width="5%">4</td><td>2016-01-03 14:53:27</td><td>Chrome</td><td>Pendaftaran Pemeriksaan Baru</td><td>Pegawai</td><td>192.168.1.21</td></tr>
				<tr class="odd">
				<td width="5%">5</td><td>2016-01-04 09:47:24</td><td>Chrome</td><td>Meluluskan Pemeriksaan</td><td>Pentadbir</td><td>192.168.1.21</td></tr>
				<tr class="even">
				<td width="5%">6</td><td>2016-01-05 12:59:21</td><td>Chrome</td><td>Kemaskini Data Pekerja Asing</td><td>Pegawai</td><td>192.168.1.21</td></tr>
				<tr class="odd">
				<td width="5%">7</td><td>2016-01-06 09:44:31</td><td>Mozilla Firefox</td><td>Log Masuk Pengguna</td><td>Pegawai</td><td>192.168.1.245</td></tr>
				<tr class="even">
				<td width="5%">8</td><td>2016-01-07 12:40:19</td><td>Chrome</td><td>Log Masuk Pengguna</td><td>Pejabat</td><td>192.168.1.245</td></tr>
				<tr class="odd">
				<td width="5%">9</td><td>2016-01-08 18:24:46</td><td>Mozilla Firefox</td><td>Log Masuk Pengguna</td><td>Pejabat</td><td>192.168.1.167</td></tr>
				<tr class="even">
				<td width="5%">10</td><td>2016-01-08 12:51:28</td><td>Chrome</td><td>Log Masuk Pengguna</td><td>Pentadbir</td><td>192.168.1.167</td></tr>
				</tbody>
				</table>

				<div class="dt-panelfooter clearfix">
					<div class="dataTables_info">Paparan 1 hingga 10 dari 11 keseluruhan</div>
					<div class="dataTables_paginate paging_simple_numbers">
						<div class="dataTables_paginate paging_bootstrap">
							<ul class="pull-right pagination" >
								<li class="first hidden">
									<a href="">&lt;&lt; </a>
								</li>
								<li class="previous hidden"><a href="">&lt; < Sebelumnya </a>
								</li>
								<li class="page selected"><a href="">1</a>
								</li>
								<li class="page"><a href="">2</a>
								</li>
								<li class="next"><a href="">Seterusnya &gt;</a>
								</li>
								<li class="last"><a href="">Akhir &gt;&gt;</a></li>
								</ul>

							</div>
						</div>
					</div>
					<div class="keys" style="display:none" title="">
						<span>1</span>
						<span>2</span>
						<span>3</span>
						<span>4</span>
						<span>5</span>
						<span>6</span>
						<span>7</span>
						<span>8</span>
						<span>9</span>
						<span>10</span>
					</div>
				</div>

				</div>


			</div>
		</div>
	</div>
</section>

