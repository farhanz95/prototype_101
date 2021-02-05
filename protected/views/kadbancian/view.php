<?php
/* @var $this KadbancianController */
/* @var $model Kadbancian */

$this->breadcrumbs=array(
	'Kad Bancian'=>array('index'),
	'Lihat Maklumat Kad Bancian'
);

?>


<section id="content" class="">
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="panel">

                <div class="panel-heading bg-dark bg-gradient">
                    <span class="h-icon text-white-dark"><i class="glyphicon glyphicon-list"></i></span><span class="panel-title text-white-dark pl10">Kad Bancian</span>
                </div>

                <div class="panel-body"> 

                    <legend> KELUARGA <a class="text-primary"><?php echo $model['keluargakadbanci']; ?></a> </legend>
 
                    <legend class="legend sub">Maklumat Kad Bancian</legend>

                    <div class="col-lg-12 mb20">

                        <div class="panel-body">

	                        <div class="col-lg-2">
	                            
	                                <span class="fa fa-credit-card fs100"></span>
	                            
	                        </div>


	                        <div class="col-lg-8 ml20">

	                            <table class="table table bordered table-responsive">
	                            <tbody>
	                                <tr>
	                                    <th width="40%">Nama Ketua Isi Rumah (Pemilik)</td>
	                                    <td><?php echo $model->keluarga->nama; ?></td>
	                                </tr>
	                                <tr>
	                                    <th>Tarikh Dikeluarkan</td>
	                                    <td><?php echo $model->tarikh; ?></td>
	                                </tr>
	                                <tr>
	                                    <th>Alamat Pemilik</td>
	                                    <td><?php echo $model->keluarga->alamat_kir; ?></td>
	                                </tr>
	                                <tr>
	                                    <th>Kampung JKK/R</td>
	                                    <td><?php echo $model->keluarga->kampung_jkkk; ?></td>
	                                </tr>
	                            </tbody>
	                            </table>

	                        </div>

 
                        </div>  

                    </div>

                    <div class="col-lg-12 mb20">

                    <div class="col-lg-6 pln">
                    
	                    <div class="panel-heading">
	                		<span class="fa fa-group mr10"></span>Maklumat Keluarga
	                	</div>
	                    
	                	<div class="panel-body">

	                	<div class="col-lg-12 mb20">
	                		<label class="col-lg-5">
	                			Nama Ketua Isi Rumah
	                		</label>
	                		<div class="col-lg-5">
	                			<?php echo $model->keluarga->nama ?>
	                		</div>
	                	</div>

	                	<div class="col-lg-12 mb20">
	                		<label class="col-lg-5">
	                			Kad Pengenalan KIR
	                		</label>
	                		<div class="col-lg-5">
	                			<?php echo $model->keluarga->kp_baru ?>
	                		</div>
	                	</div>

	                	<div class="col-lg-12 mb20">
	                		<label class="col-lg-5">
	                			Jawatan Ketua Isi Rumah
	                		</label>
	                		<div class="col-lg-5">
	                			<?php echo "Pengajar" ?>
	                		</div>
	                	</div>

	                	</div>

                	</div>

                	 <div class="col-lg-6 pln">
                    
	                    <div class="panel-heading">
	                		<span class="fa fa-group mr10"></span>Maklumat Tempat Tinggal
	                	</div>
	                    
	                	<div class="panel-body">

	                	<div class="col-lg-12 mb20">
	                		<label class="col-lg-4">
	                			Alamat KIR
	                		</label>
	                		<div class="col-lg-8">
	                			<?php echo $model->keluarga->alamat_kir ?>
	                		</div>
	                	</div>

	                	<div class="col-lg-12 mb20">
	                		<label class="col-lg-4">
	                			Poskod
	                		</label>
	                		<div class="col-lg-8">
	                			<?php echo $model->keluarga->poskod ?>
	                		</div>
	                	</div>

	                	<div class="col-lg-12 mb20">
	                		<label class="col-lg-4">
	                			Kampung JKKK
	                		</label>
	                		<div class="col-lg-8">
	                			<?php echo $model->keluarga->kampung_jkkk ?>
	                		</div>
	                	</div>

	                	</div>

                	</div>

                	  <?php echo CHtml::link('<i class="fa fa-arrow-left mr10"></i>Kembali Ke Senarai Kad Bancian', array('/kadbancian/index'), array('class'=>'btn btn-primary pull-left') ) ?>

                    </div>  
                     
                    </div>       

                </div>
            </div>
        </div>
    </div>
</div>

