<?php

$agama = ListAgama::model()->findAll();
$agama = CHtml::listData($agama, 'id','nama');

$kaum = ListBangsa::model()->findAll();
$kaum = CHtml::listData($kaum, 'id','nama');

$negeri = ListNegeri::model()->findAll();
$negeri = CHtml::listData($negeri, 'list_state_id','list_state_nicename');

$daerah = ListDaerah::model()->findAll();
$daerah = CHtml::listData($daerah, 'list_district_id','list_district_name');

$etnik = ListBangsa::model()->findAll();
$etnik = CHtml::listData($etnik, 'jenis_bangsa','jenis_bangsa');


?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'orangasli-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal', 'role'=>'form'),
)); ?>

<div class="alert alert-sm alert-border-left alert-primary light alert-dismissable">
<?php if( $model['ic'] == "") { ?>
<a class="glyphicon glyphicon-exclamation-sign mr10"></a>
<font size="2em">No Kad Pengenalan akan dijana secara automatik oleh sistem </font></br>
<a class="glyphicon glyphicon-exclamation-sign mr10"></a>
<font size="2em" class="text-dark">No Siri akan dijadikan No Rujukan bagi kod pendaftaran ahli</font>
<?php } else { ?>
<a class="glyphicon glyphicon-exclamation-sign mr10"></a>
<font size="2em"> NO KAD PENGENALAN [ <?php echo $model['nama'] ?> ]<span class="fa fa-arrow-right mr20 ml20"></span> <?php echo $model['ic'] ?></font></br>
<?php } ?>
</div>

	<?php echo $form->errorSummary($model); ?>

	<div class="col-lg-12">

        

		<div class="col-lg-12">
         
			<div class="panel-heading">
				<span class="fa fa-user mr10"></span> Maklumat Orang Asli
			</div>

			<div class="panel-body">

            <div class="col-lg-12 mb10">
                <div class="pull-left">
                NO SIRI <label class="label label-success">0301063025</label>
                </div>
                <div class="pull-right">
                Tarikh Terakhir Dikemaskini Pada : <?php if($model['status_orangasli_id'] > 0) { echo "10/5/2016 "; } ?>
                </div> 
            </div>

				<table class="table table-bordered table-responsive">
					<tr style="background-color: #0182C6  ; color:white">
						<td><span class="fa fa-user mr10"></span>Nama</td>
						<td>
                            <span class="glyphicon glyphicon-home mr10"></span>Negeri Kelahiran
                        </td>

					</tr>
					<tr>
						<td>
							<div class="form-group pr10 pl10">
							<?php echo $form->textField($model,'nama',array('class'=>'form-control wauto' ,'placeholder'=>'Contoh Format Nama : ARJUNA A/L WIRAWAN , ALI KASSIM BIN RAZALI')); ?>
							<?php echo $form->error($model,'nama'); ?>
							</div>
						</td>
						<td width="30%">
							<div class="form-group pr10 pl10">
							<?php echo $form->dropDownList($model,'negeri',$negeri,array('class'=>'form-control wauto')); ?>
                            <?php echo $form->error($model,'negeri'); ?>
							</div>
						</td>
					</tr>
				</table>

				<table class="table table-bordered table-responsive mt20">
					<tr style="background-color: #0182C6  ; color:white">
						<td><span class="fa fa-calendar mr10"></span>Tarikh Lahir</td>
						<td><span class="fa fa-child mr10"></span>Suku Kaum / Etnik</td>
						<td><span class="fa fa-female mr5"></span><span class="fa fa-male mr10"></span>Jantina</td>
					</tr>
					<tr>
						<td>
							<div class="form-group pl10 pl10">
								      <?php 
                                        $pattern = 'dd/MM/yyyy';
                                        $timestamp = strtotime($model->dob);
                                        if ($timestamp !== false)
                                                $model->dob = Yii::app()->getDateFormatter()->format($pattern, $timestamp);
                                        else
                                                $model->dob =  '';
                                        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                                'model'=>$model,
                                                'attribute'=>'dob',
                                                'options'=>array(
                                                        'dateFormat'=>'dd/mm/yy',
                                                        'maxDate'=>'d',//day can choose >= tomorrow
                                                        ),
                                                'htmlOptions'=>array(
                                                        'class'=>'form-control w200',
                                                        'type'=>'number',
                                                        )
                                                
                                        ));
                                    ?>
								<?php echo $form->error($model,'dob'); ?>
								</div>
							</div>
						</td>
						<td>
                        <?php if( $model->isNewRecord) { ?>
                            <select class="form-control wauto">
                                <option selected="selected">-Pilih Suku Kaum-</option>
                                <option>Negrito</option>
                                <option>Senoi</option>
                                <option>Melayu Asli</option>
                            </select>
                        <?php } else { ?>
                            <select class="form-control wauto">
                                <option>-Pilih Suku Kaum-</option>
                                <option selected="selected">Negrito</option>
                                <option>Senoi</option>
                                <option>Melayu Asli</option>
                            </select>
                        <?php } ?>
    						<?php echo $form->dropDownList($model,'keturunan',$kaum, array('class'=>'form-control wauto mt10', 'empty'=>'-Pilih Etnik-')); ?>
    						<?php echo $form->error($model,'keturunan'); ?>	
                        </div>

                        </td>
						<td>
							
							<?php echo $form->dropDownList($model,'jantina', array('Lelaki'=>'Lelaki','Perempuan'=>'Perempuan','Tidak Pasti'=>'Tidak Pasti'), array('class'=>'form-control w200')); ?>
							<?php echo $form->error($model,'jantina'); ?>

						</td>
					</tr>
				</table>

					 


						<div class="form-group mt10">
							<div class="col-lg-7">
					<?php echo CHtml::tag('button', array('class' => 'btn btn-primary'), $model->isNewRecord ? '<i class="fa fa-upload mr10"></i> Hantar Maklumat Pendaftaran' :'<i class="fa fa-pencil mr10"></i> Simpan Maklumat Pendaftaran');?>
							</div>
						</div>

					
			</div>
		</div>
 

	</div>


	

	

<?php $this->endWidget(); ?>

</div><!-- form -->



<!-- Modal Approve -->
<div class="modal fade" id="approve-Modal" tabindex="-1" role="dialog" aria-labelledby="approve-ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="approve-ModalLabel"><i class="fa fa-search mr10"></i> Semakan (ARJUNA A/L WIRAWAN) </h4>
            </div>
            <div class="modal-body">
                <div id="approve-progress-container">
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary progress-bar-striped active" role="progressbar"
                          aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                        </div>
                    </div>
                </div>
                <div id="approve-list-container">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<label class="alert alert-sm alert-border-left alert-primary light alert-dismissable fontwn font2"><span class="glyphicon glyphicon-exclamation-sign mr10"></span>Sila Pastikan semua maklumat yang diisi adalah tepat</form></label>

                <table class="table table-bordered table-responsive">
                    <tbody>
                        <tr style="background-color: #0182C6  ; color:white">
                            <td>No Kad Pengenalan</td>
                            <td>Nama</td>
                            <td>Agama</td>
                            <td>Kaum</td>
                            <td>Jantina</td>
                        </tr>
                        <tr>
                            <td>010101016199</td>
                            <td>ARJUNA A/L WIRAWAN</td>
                            <td>Atheist</td>
                            <td>Negrito Kintaq</td>
                            <td>Lelaki</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-bordered table-responsive mt20">
                    <tbody>
                        <tr style="background-color: #3BAFDA  ; color:white">
                            <td>Tarikh Lahir</td>
                            <td>Nama Keluarga</td>
                            <td>Status Perkahwinan</td>
                        </tr>
                        <tr>
                            <td>01-01-2001</td>
                            <td>WIRAWAN</td>
                            <td>Belum Berkahwin</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-bordered table-responsive mt20">
                    <tbody>
                        <tr style="background-color: #8CC152  ; color:white">
                            <td>Alamat</td>
                            <td>Poskod</td>
                            <td>Daerah</td>
                            <td>Negeri</td> 
                        </tr>
                        <tr>
                            <td>No 121 Jalan Kintak, Kampung Tanjung Bachik</td>
                            <td>54100</td>
                            <td>Johor Bahru</td>
                            <td>Johor</td>   
                        </tr>
                    </tbody>
                </table>
 
                       <div class="mt20 mln">

                       <label class="alert alert-sm alert-border-left alert-danger light alert-dismissable fontwn font2"><span class="glyphicon glyphicon-exclamation-sign mr10"></span>Selepas Maklumat Dihantar Untuk Pengesahan, Pengemaskinian Data Tidak Boleh Lagi Dibuat</form></label>

                       <div class="col-lg-12">

                       <div class="col-lg-3">
<?php echo CHtml::link('<i class="fa fa-arrow-left mr10 pull-left"></i> KEMBALI', array('/orangasli/pendaftaranindividu'), array('class'=>'btn btn-primary'));?>
						</div>

                      <div class="col-lg-9">
               <?php echo CHtml::tag('button', array('class' => 'btn btn-primary'),'<i class="fa fa-upload mr10"></i> Hantar Maklumat Pendaftaran [ARJUNA A/L WIRAWAN]');?>
               		   </div>

               		   </div>

                       </div>
                     
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php
Yii::app()->clientScript->registerScript(
    'message', 
    "
    $('#approve-application').on('click', function(){
        var url = '".Yii::app()->controller->createUrl('/sijil/approve')."/id/'+id;
        $('#next-apllication').attr('href', url);
    });

    $('body').on('click', 'a.approve-Modal', function(event){
        event.preventDefault();

        $('#approve-Modal').modal('show');

        $('#approve-progress-container').show();
        $('#approve-list-container').hide();

        $('#approve-Modal').on('shown.bs.modal', function(){
            $('#approve-progress-container').hide();
            $('#approve-list-container').show();
        });
    });

    ",
    CClientScript::POS_READY
);
?>