<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	'Bank Soalan',
);
?>
<style>
.number-rounded{
padding:5px 10px;border-radius:100%;border:solid 1px #aaa
}
</style>
<section id="content" class="animated fadeIn">
	<div class="row">
		<div class="col-sm-6 col-lg-6">
            <div class="panel panel-system">
                <div class="panel-heading  ">
                	<i class="glyphicon glyphicon-list-alt mr10"></i>Soalan Baru
                </div>
                <div class="panel-body h-400">
                <div class="text-center mb30"><h2>Buat Soalan Baru.</h2></div>
                
                <div class="col-lg-6">
                <div class="text-center">
                <span class="number-rounded">1</span><br><br>
                <span>Tambah Soalan</span>
            	</div>
            	</div>
                <div class="col-lg-6">
                <div class="text-center">
                <span class="number-rounded">2</span><br><br>
                <span>Lengkapkan Jawapan</span>
            	</div>
            	</div>
                 
            	<div class="col-lg-12 mt20">
            	<input type="text" id="inputStandard" class="form-control" placeholder="Masukkan tajuk soalan..">
            	</div>
            	<div class="text-center">
            	<a class="btn btn-success mt20" href="formsoalan"><i class="fa fa-plus pr10"></i> Tambah Soalan</a>
            	</div>
            	<!-- <div class="text-center mt20">
            	<a class="text-primary" href="createtemplate">Or start from our expert templates</a>
            	</div> -->
                </div>
			</div>
		</div>

		<div class="col-sm-6 col-lg-6">
            <div class="panel panel-dark">
                <div class="panel-heading ">
                	<span class="h-icon"><i class="glyphicons glyphicons-circle_question_mark"></i></span><span class="panel-title text-white-dark ">Bagaimana Bank Soalan Banci Berfungsi</span>
                </div>
                <div class="panel-body h-400">
                	<div class="col-lg-3">
                	<span class="mt20 pull-right glyphicons glyphicons-edit fs60"></span>
                	</div>
                	<div class="col-lg-9">
                	<h3>Kemukakan soalan</h3>
                	<ul>
                	<li>Masukkan tajuk soalan</li>
                	<li>Kemukakan jawapan untuk soalan yang dibuat</li>
                	<li>Sistem interaksi menjadi lebih teratur</li>
                	</ul>
                	</div>

                	<div class="col-lg-3">
                	<span class="mt20 pull-right glyphicons glyphicons-group fs60"></span>
                	</div>
                	<div class="col-lg-9">
                	<h3>Pengguna bancian soalan</h3>
                	<ul>
                	<li>Boleh dirujuk di halaman log masuk pengguna</li>
                	<li>Dihamparkan pada muka depan website untuk pengguna sistem SPMOA</li>
                    <li>Bank Soalan boleh ditambah mengikut kod kawasan</li>
                	</ul>
                	</div>

                	<div class="col-lg-3">
                	<span class="mt20 pull-right glyphicons glyphicons-charts fs60"></span>
                	</div>
                	<div class="col-lg-9">
                	<h3>Maklumbalas dan rujukan</h3>
                	<ul>
                	<li>Penghasilan sistem yang lebih cekap dan teratur</li>
                    <li>Integriti antara subsektor pekerja JAKOA</li>
                	</ul>
                	</div>

                </div>
			</div>
		</div>
	</div>
</section>