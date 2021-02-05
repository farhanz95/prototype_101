<?php
/* @var $this OrangasliController */
/* @var $model Orangasli */

$this->breadcrumbs=array(
	'Orang Asli'=>array('index'),
	'Pendaftaran Berjaya',
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
                    <span class="h-icon text-white-dark"><i class="glyphicon glyphicon-list"></i></span><span class="panel-title text-white-dark pl10">Pendaftaran [ <?php echo $model['nama']; ?> ] Berjaya </span>
                </div>

                <div class="panel-body"> 

                    <legend> <?php echo $model['nama']; ?> </legend>

                    <div class="alert alert-primary alert-sm alert-left-border light dismissable">
                        <span class="glyphicon glyphicon-exclamation-sign mr10"></span> 
                        No Kad Pengenalan <?php echo $model['nama'] ?> telah berjaya dijana masuk ke dalam sistem 
                        <span class="fa fa-arrow-right ml10 mr10 text-dark"></span>
                        <font size="3em" class="text-dark">[ <?php echo $model['ic'] ?> ]</font>
                    </div>

                    <legend class="legend sub">Profile</legend>

                    <div class="col-lg-12 mb20">

                        <div class="panel-body">

                        <div class="col-lg-2">
                            
                                <span class="glyphicon glyphicon-user fs100"></span>
                            
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
                                    <td>
                                        <?php echo $model['ic']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Jantina</td>
                                    <td><?php echo $model['jantina']; ?></td>
                                </tr>
                                <tr>
                                    <th>Negeri Kelahiran</td>
                                    <td><?php echo $model->negeri1->list_state_nicename; ?></td>
                                </tr>
                                <tr>
                                    <th>Tarikh Lahir</td>
                                    <td><?php echo $model['dob']; ?></td>
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

                    </tbody>
                    </table>

                    <?php echo CHtml::link('<i class="fa fa-arrow-left mr10"></i>Kembali Ke Senarai Maklumat Orang Asli', array('/orangasli/index'), array('class'=>'btn btn-primary pull-left') ) ?>

                    <?php echo CHtml::link('<i class="fa fa-plus mr10"></i>Tambah Maklumat [ '.$model['nama'].' ]', array('/orangasli/tambahdata/'.$model['orangasli_id']), array('class'=>'btn btn-info br24 pull-right') ) ?>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- target="_blank" -->