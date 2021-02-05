<?php
/* @var $this OrangasliController */
/* @var $model Orangasli */

$this->breadcrumbs=array(
	'Orang Asli'=>array('index'),
	$model->nama=>array('view','id'=>$model->orangasli_id),
	'Lihat Profil',
);

$datebirth = $model['dob'];

$from = new DateTime($datebirth);
$to   = new DateTime('today');
//echo $from->diff($to)->y;

$diffage = date_diff(date_create($datebirth), date_create('today'))->y;

?>


<section id="content" class="">
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="panel">

                <div class="panel-heading bg-dark bg-gradient">
                    <span class="h-icon text-white-dark"><i class="glyphicon glyphicon-list"></i></span><span class="panel-title text-white-dark pl10">Profil [ <?php echo $model['nama']; ?> ] </span>
                </div>

                <div class="panel-body"> 

                    <legend> <?php echo $model['nama']; ?> </legend>



                    <legend class="legend sub">Maklumat Asas</legend>

                    <div class="col-lg-12 mb20">

                        <div class="panel-body">

                        <div class="col-lg-2 pln">

<?php if($model['nama_gambar'] == "")  { ?>
<img src = "<?php echo Yii::app()->request->baseUrl ?>/css/img/avatars/placeholder.png" class="w175" rel="tooltip" data-toggle="tooltip" data-original-title="Change Picture" >
<?php } else { ?>
<img src = "<?php echo Yii::app()->request->baseUrl ?>/images/upload/<?php echo $model['nama_gambar']?>" class="w175">
<?php } ?>             
                        </div>


                        <div class="col-lg-8 ml20">

                            <table class="table table bordered table-responsive">
                            <tbody>
                                <tr>
                                    <th>Nama</td>
                                    <td><?php echo $model['nama']; ?></td>
                                </tr>
                                <tr>
                                    <th>No Kad Pengenalan</td>
                                    <td><?php echo $model['ic']; ?></td>
                                </tr>
                                <tr>
                                    <th>Jantina</td>
                                    <td><?php echo $model['jantina']; ?></td>
                                </tr>
                                 <tr>
                                    <th>Umur</td>
                                    <td><?php echo $diffage ?> Tahun</td>
                                </tr>
                            </tbody>
                            </table>

                        </div>
 
                        </div>  

                    </div>

                    <legend class="legend sub">Maklumat Terperinci</legend>

                    <table class="table table-bordered table-responsive">
                    <tbody>
                        <tr>
                            <th>Tarikh dan Status</td>
                            <th>Profil</td>
                            <th>Alamat Dan No Hubungan</td>
                            <th>Maklumat Kerja, Tangungan, Keluarga <br> (Jika KIR)</td>
                            <th>Tindakan</td>
                        </tr>
                        <tr>
                            <td><b>Tarikh Didaftarkan</b></br>10 / 5 / 2016 </br></br> <b>Status</b></br><a class="text-system">
                            <?php echo $model->statusOrangasli->status_orangasli_name ?> </a></td>
                            <td>
                            	<b>Kad Pengenalan</b></br>
                            	<?php echo $model['ic'] ?> </br></br>
                            	<b>Nama Penuh</b></br>
                            	<?php echo $model['nama'] ?> </br></br>
                            	<b>Tarikh Lahir</b></br>
                            	<?php echo $model['dob'] ?> </br></br>
                            	<b>Bangsa</b></br>
                            	<?php echo $model->keturunan0->nama . " [" . $model->keturunan0->jenis_bangsa . "]" ?> </br></br>
                            	<b>Agama</b></br>
                            	<?php echo $model->agama0->nama ?> </br></br>
                            	<b>Jantina</b></br>
                            	<?php echo $model['jantina']  ?> </br></br>
                            </td>
                            <td>
                                <b>Alamat Rumah</b>
                            </br>
                                <?php echo $model['alamat']; ?>
                                </br>
                                <?php echo $model['poskod']; ?>
                                </br>
                                <?php echo $model->daerah0->list_district_name; ?>
                                </br> 
                            	<?php echo $model->negeri0->list_state_nicename; ?> 
                            </br>
                            </br>
                                <b>No Telefon</b>
                            </br>
                                <?php echo $model['telefon']; ?>
                            </br>
                            </br>
                                <b>Alamat Emel</b>
                            </br>
                                <?php echo $model['email']; ?>
                            </br></br></br>
 


                            </td>
                            <td>

                            <b>Negeri Kelahiran</b>
                            </br>
                            <?php echo $model->negeri1->list_state_nicename ?>
                            </br></br>
                            <b>Pekerjaan</b>
                            </br>
                            <?php echo $model->pekerjaan1->nama ?>
                            </br></br>
                            <b>Pendapatan</b>
                            </br>
                            RM <?php echo $model['pendapatan'] ?>
                            </br</br>

                                <table class="table table-bordered table-responsive mt20">
                                	<tr>
                                		<td class="bold">Hubungan</td>
                                		<td class="bold">Nama</td>
                                		<td class="bold">No IC</td>
                                	</tr>
                                	<tr>
                                		<td><label class="btn btn-xs btn-primary"><span class="fa fa-user"></span> Ayah</label></td>
                                		<td>Wirawan</td>
                                		<td>800101035199</td>
                                	</tr>
                                	<tr>
                                		<td><label class="btn btn-xs btn-primary"><span class="fa fa-user"></span> Ibu</label></td>
                                		<td>Agnes</td>
                                		<td>820303034199</td>
                                	</tr>
                                </table>
                            </td>
                            <td>
    <?php if($model->statusOrangasli->status_orangasli_id == '3') { ?>

<div class="col-lg-12">
<a href="javascript:window.print()" class="btn btn-default mt10 mr10"><i class="fa fa-print pr5"></i> Cetak</a>
</div>

<div class="col-lg-12 mt10">
<a href="" rel="tooltip" data-toggle="tooltip" data-original-title="Download In Word" class="va-b fa fa-file-word-o fs30 text-primary mr5"></a>

<a href="" rel="tooltip" data-toggle="tooltip" data-original-title="Download In Excel" class="va-b fa fa-file-excel-o fs30 text-success mr5"></a>

<a href="" rel="tooltip" data-toggle="tooltip" data-original-title="Download In PDF" class="va-b fa fa-file-pdf-o fs30 text-danger mr5"></a>

<div class="col-lg-12 mt10 pln">
<a class="btn btn-default br3 va-b" rel="tooltip" data-toggle="tooltip" data-original-title="Export To CSV"><span class="fa fa-share mr5"></span>CSV</a>
</div>
 
    <?php } ?>
                            </td>
                        </tr>
                    </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- target="_blank" -->