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

$kampungname = ListKampung::model()->findAll();
$kampungname = CHtml::listData($kampungname, 'kampung_name', 'kampung_name');

$pekerjaan = ListPekerjaan::model()->findAll();
$pekerjaan = CHtml::listData($pekerjaan, 'pekerjaan_id', 'nama');

$a = 0;

foreach($kampungname as $name)
{
	$kampung[$a] = $name;
	$a++;
}
 

?>



<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'orangasli-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal', 'role'=>'form','enctype'=>'multipart/form-data'),
)); ?>

<div class="alert alert-sm alert-border-left alert-primary light alert-dismissable">

<a class="glyphicon glyphicon-exclamation-sign mr10"></a>
<font size="2em">Sila isi maklumat tambahan, dan klik Hantar untuk Pengesahan</font>

</div>

	<?php echo $form->errorSummary($model); ?>

	<div class="col-lg-12">

		<div class="col-lg-12">
			<div class="panel-heading">
				<span class="fa fa-user mr10"></span> Maklumat Orang Asli
			</div>

			<div class="panel-body">

				<table class="table table-bordered table-responsive">
					<tr style="background-color: #0182C6  ; color:white">
						<td>Nama</td>
						<td>No Kad Pengenalan</td>

					</tr>
					<tr>
						<td>
							<div class="form-group pr10 pl10">
							<?php echo $form->textField($model,'nama',array('class'=>'form-control wauto', 'readOnly'=>'true')); ?>
							<?php echo $form->error($model,'nama'); ?>
							</div>
						</td>
						<td width="30%">
							<div class="form-group pr10 pl10">
							<?php echo $form->textField($model,'ic',array('class'=>'form-control wauto', 'readOnly'=>'true')); ?>
							<?php echo $form->error($model,'ic'); ?>
							</div>
						</td>
					</tr>
				</table>

				<table class="table table-bordered table-responsive mt20">
					<tr style="background-color: #0182C6  ; color:white">
						<td>Tarikh Lahir</td>
						<td>Suku Kaum / Bangsa</td>
						<td>Jantina</td>
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
									        		'readOnly'=>'true'
									        		)
									        
									));
								?>
								<?php echo $form->error($model,'dob'); ?>
								</div>
							</div>
						</td>
						<td>
							
							<div class="form-group pl10 pr10">

								<?php echo $form->dropDownList($model,'keturunan',$kaum,array('class'=>'form-control w200', 'readOnly'=>'true')); ?>
								<?php echo $form->error($model,'keturunan'); ?>
							</div>

						</td>
						<td>
							
							<div class="form-group pl10 pr10">

								<?php echo $form->textField($model,'jantina',array('class'=>'form-control w200', 'value'=>'Lelaki', 'readOnly'=>'true')); ?>
								<?php echo $form->error($model,'jantina'); ?>
							</div>

						</td>
					</tr>
				</table>
					

			</div>
		</div>

	<div class="col-lg-12 mt20">

		<div class="panel-heading">
			<span class="fa fa-plus mr10"></span> Maklumat Tambahan
		</div>

		<div class="panel-body">


			<div class="col-lg-6">

				<div class="panel-heading">
					<span class="fa fa-user-plus mr10"></span> Maklumat Diri
				</div>

				<div class="panel-body">

					<div class="form-group">

					<?php if($model['nama_gambar'] == "") { ?>
					
					<label class="col-lg-4 control-label">Muat Naik Gambar Ukuran Passport</label>

					<div class="col-lg-7">
						<?php echo $form->fileField($model,'nama_gambar' , array('class'=>'form-control w250')) ?>
					</div>
					
					<?php } else { ?>

					<div class="form-group">
					<div class="col-lg-6">
					<label class="control-label text-center">
					Muat Naik Gambar Baru
					<?php echo $form->fileField($model,'nama_gambar' , array('class'=>'form-control ')) ?>
					</label>
					</div>
					<div class="col-lg-6">
<img src = "<?php echo Yii::app()->request->baseUrl ?>/images/upload/<?php echo $model['nama_gambar']?>" class="w175">
					</div>
					</div>
					<?php } ?>
					</div>

					<!--   -->

					<div class="form-group">
						<?php echo $form->labelEx($model,'agama', array('class'=>'col-lg-4 control-label text-right')); ?>
						<div class="col-lg-7">
						<?php echo $form->dropDownList($model,'agama', $agama , array('class'=>'form-control w200', 'empty'=>'-Pilih-')); ?>
						<?php echo $form->error($model,'agama'); ?>
						</div>
					</div>

					<div class="form-group">
						<?php echo $form->labelEx($model,'statuskahwin', array('class'=>'col-lg-4 control-label text-right')); ?>
						<div class="col-lg-7">
						<?php echo $form->dropDownList($model,'statuskahwin', array(
						'Belum Berkahwin'=>'Belum Berkahwin', 
						'Berkahwin'=>'Berkahwin',
						'Bercerai'=>'Bercerai',
						) , array('class'=>'form-control w200')); ?>
						<?php echo $form->error($model,'statuskahwin'); ?>
						</div>
					</div>

					<div class="form-group">
						<?php echo $form->labelEx($model,'email', array('class'=>'col-lg-4 control-label text-right')); ?>
						<div class="col-lg-7">
						<?php echo $form->emailField($model,'email',array('class'=>'form-control')); ?>
						<?php echo $form->error($model,'email'); ?>
						</div>
					</div>

					<div class="form-group">
						<?php echo $form->labelEx($model,'telefon', array('class'=>'col-lg-4 control-label text-right')); ?>
						<div class="col-lg-7">
						<?php echo $form->textField($model,'telefon',array('class'=>'form-control')); ?>
						<?php echo $form->error($model,'telefon'); ?>
						</div>
					</div>

					<div class="form-group">
						<?php echo $form->labelEx($model,'pekerjaan', array('class'=>'col-lg-4 control-label text-right')); ?>
						<div class="col-lg-7">
						<?php echo $form->dropDownList($model,'pekerjaan', $pekerjaan , array('class'=>'form-control w200', 'empty'=>'-Pilih-')); ?>
						<?php echo $form->error($model,'pekerjaan'); ?>
						</div>
					</div>

					<div class="form-group">
						<?php echo $form->labelEx($model,'pendapatan', array('class'=>'col-lg-4 control-label text-right')); ?>
						<div class="col-lg-7">
						<?php echo $form->textField($model,'pendapatan',array('class'=>'form-control')); ?>
						<?php echo $form->error($model,'pendapatan'); ?>
						</div>
					</div>

				</div>

				<!-- <a class="btn btn-info approve-Modal mt10"><span class="fa fa-search mr10"></span>SEMAKAN</a> -->
			 
			</div>

			<div class="col-lg-6">

			<div class="panel-heading">
				<span class="fa fa-home mr10"></span> Maklumat Tempat Tinggal
			</div>

			<div class="panel-body">

			<div class="form-group">
				<?php echo $form->labelEx($model,'negeri', array('class'=>'col-lg-3 control-label text-right')); ?>
				<div class="col-lg-7">
				<?php echo $form->dropDownList($model, 'negeri', $negeri, array('prompt'=>'--Pilih Negeri--', 'class'=>'form-control w300',
						'ajax'=>array(
							'type'=>'POST',
							'url'=>Yii::app()->createUrl('orangasli/getdistrict'),
							'update'=>'#Orangasli_daerah'
						)
						)); ?>
                	<?php echo $form->error($model,'negeri'); ?>
				</div>
			</div>

			<div class="form-group">
				<?php echo $form->labelEx($model,'daerah', array('class'=>'col-lg-3 control-label text-right')); ?>
				<div class="col-lg-7">
				<?php echo $form->dropDownList($model, 'daerah', array($model->daerah0->list_district_id=>$model->daerah0->list_district_name), array('prompt'=>'--Pilih Daerah--', 'class'=>'form-control w300' )); ?>
                	<?php echo $form->error($model,'daerah'); ?>
				</div>
			</div>

			<div class="form-group">
				<?php echo $form->labelEx($model,'kampung', array('class'=>'col-lg-3 control-label text-right')); ?>
				<div class="col-lg-7">
				<?php 

					$this->widget('zii.widgets.jui.CJuiAutoComplete',array(
					    'model'=>$model,
                        'attribute'=>'kampung',
                        'name'=>'kampung',
					    'source'=>$kampung,
					    // additional javascript options for the autocomplete plugin
					    'options'=>array(
					        'minLength'=>'1',
					        'size'=>'5',   	
					    ),
					    'htmlOptions'=>array(
                        	'class'=>'form-control w300',
                        )
					));

					 ?>
				<?php echo $form->error($model,'kampung'); ?>
				</div>
			</div>

			<div class="form-group">
				<?php echo $form->labelEx($model,'alamat', array('class'=>'col-lg-3 control-label text-right')); ?>
				<div class="col-lg-7">
				<?php echo $form->textArea($model,'alamat',array('form-groups'=>7, 'cols'=>50, 'class'=>'form-control','style'=>'width:300px !important')); ?>
				<?php echo $form->error($model,'alamat'); ?>
				</div>
			</div>

			<div class="form-group">
				<?php echo $form->labelEx($model,'poskod', array('class'=>'col-lg-3 control-label text-right')); ?>
				<div class="col-lg-7">
				<?php echo $form->numberField($model,'poskod' ,array('class'=>'form-control w100', 'min'=>1, 'max'=>99999)); ?>
				<?php echo $form->error($model,'poskod'); ?>
				</div>
			</div>

			</div>

		</div>

		</div>

		<?php echo CHtml::tag('button', array('class' => 'btn btn-info mb20 mt20'), $model->isNewRecord ? '<i class="fa fa-upload mr10"></i> Hantar Maklumat Pendaftaran' :'<i class="fa fa-plus mr10"></i> Selesai Tambah Maklumat');?>

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
<?php echo CHtml::link('<i class="fa fa-arrow-left mr10 pull-left"></i> KEMBALI', array('/orangasli/tambahdata/1'), array('class'=>'btn btn-primary'));?>
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