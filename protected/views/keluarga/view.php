<?php
/* @var $this OrangasliController */
/* @var $model Orangasli */

$this->breadcrumbs=array(
	'Keluarga Orang Asli'=>array('index'),
	'Lihat Maklumat Keluarga',
);

?>
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'keluarga-form',
    'enableAjaxValidation'=>false,
    'htmlOptions'=>array('class'=>'form-horizontal', 'role'=>'form'),
)); ?>

<section id="content" class="">
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="panel">

                <div class="panel-heading bg-dark bg-gradient">
                    <span class="h-icon text-white-dark"><i class="fa fa-group"></i></span><span class="panel-title text-white-dark pl10">Keluarga [ <?php echo $model['nama_kir']; ?> ] </span>
                </div>

                <div class="panel-body"> 

                    <legend> <?php echo $model['nama_kir']; ?> </legend>



                    <legend class="legend sub">Maklumat Ketua Keluarga</legend>

                    <div class="col-lg-12 mb20">

                        <div class="panel-body">

                        <div class="col-lg-2">
                            
                                <span class="glyphicon glyphicon-user fs100"></span>
                            
                        </div>


                        <div class="col-lg-8 ml20">

                            <table class="table table bordered table-responsive">
                            <tbody>
                                <tr>
                                    <th>Nama KIR (Ketua Isi Rumah) </td>
                                    <td><?php echo $model['nama_kir']; ?></td>
                                </tr>
                                <tr>
                                    <th>No Kad Pengenalan KIR</td>
                                    <td><?php echo $model['kp_baru']; ?></td>
                                </tr>
                                <tr>
                                    <th>Alamat KIR</td>
                                    <td><?php echo $model['alamat_kir']; ?></td>
                                </tr>
                                 <tr>
                                    <th>Jumlah Tanggungan</td>
                                    <td><?php echo "5" ?></td>
                                </tr>
                            </tbody>
                            </table>

                        </div>
 
                        </div>  

                    </div>

                    <legend class="legend sub">Maklumat Keluarga</legend>

                    <table class="table table-bordered table-responsive">
                    <tbody>
                        <tr>
                            <th width="30%"><a>A. MAKLUMAT ASAS KETUA ISI RUMAH (KIR)</a></td>
                            <td rowspan="11">
                                
                            <table class="table table-bordered table-responsive">
                                <tr>
                                    <td width="30%"><?php echo $form->labelEx($model,'nama_kir'); ?></td>
                                    <td><?php echo $model->nama_kir ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $form->labelEx($model,'kp_baru'); ?></td>
                                    <td><?php echo $model->kp_baru ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $form->labelEx($model,'kp_lama'); ?></td>
                                    <td><?php echo $model->kp_lama ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $form->labelEx($model,'warna_kp'); ?></td>
                                    <td><?php echo $model->warna_kp ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $form->labelEx($model,'alamat_kir'); ?></td>
                                    <td><?php echo $model->alamat_kir ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $form->labelEx($model,'poskod'); ?></td>
                                    <td><?php echo $model->poskod ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $form->labelEx($model,'negeri'); ?></td>
                                    <td><?php echo $model->negeri0->list_state_name ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $form->labelEx($model,'daerah'); ?></td>
                                    <td><?php echo $model->daerah0->list_district_name ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $form->labelEx($model,'mukim'); ?></td>
                                    <td><?php echo $model->mukim ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $form->labelEx($model,'kampung'); ?></td>
                                    <td><?php echo $model->kampung ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $form->labelEx($model,'status_perjawatan'); ?></td>
                                    <td><?php echo $model->statusPerjawatan->nama ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $form->labelEx($model,'kampung_jkkk'); ?></td>
                                    <td><?php echo $model->kampung_jkkk ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $form->labelEx($model,'status_ahli'); ?></td>
                                    <td><?php echo $model->statusAhli->status_orangasli_name ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $form->labelEx($model,'parlimen'); ?></td>
                                    <td><?php echo $model->parlimen ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $form->labelEx($model,'dun'); ?></td>
                                    <td><?php echo $model->dun ?></td>
                                </tr>
                            </table>

                            </td>
                        </tr>
                        <tr>
                            <th>B. PROFIL KETUA ISI RUMAH (KIR)</td>
                        </tr>
                        <tr>
                            <th>C. KELULUSAN DAN STATUS TANAH YANG DIUSAHAKAN</td>
                        </tr>
                        <tr>
                            <th>D. BUTIR-BUTIR TEMPAT KEDIAMAN</td>
                        </tr>
                        <tr>
                            <th>E. MAKLUMAT BANTUAN PROJEK PEMBANGUNANAN RAKYAT TERMISIKIN (PPRT) </td>
                        </tr>
                        <tr>
                            <th>F. PROFIL AHLI ISI KELUARGA (AIR)</td>
                        </tr>
                        <tr>
                            <th>G. PENDAPATAN ISI RUMAH DALAM TEMPOH 12 BULAN YANG LALU</td>
                        </tr>
                        <tr>
                            <th>H. MAKLUMAT PENDAFTARAN</td>
                        </tr>
                        <tr>
                            <th>I. HELAIAN KERJA KIR</td>
                        </tr>
                        <tr>
                            <th>J. HELAIAN KERJA AIR</td>
                        </tr>

                    </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>


<?php $this->endWidget(); ?>