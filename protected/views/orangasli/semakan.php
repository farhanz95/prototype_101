<?php

$this->breadcrumbs=array(
	'Orang Asli'=>array('index'),
	$model->nama=>array('view','id'=>$model->orangasli_id),
	'Semakan',
);

?>

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

$pekerjaan = ListPekerjaan::model()->findAll();
$pekerjaan = CHtml::listData($pekerjaan, 'pekerjaan_id', 'nama');


?>


<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'orangasli-form',
    'enableAjaxValidation'=>false,
    'htmlOptions'=>array('class'=>'form-horizontal', 'role'=>'form'),
)); ?>

<section id="content">
	<div class="panel">
		<div class="panel panel-dark">
			<div class="panel-heading">
				<span class="fa fa-check mr10"></span>Semakan
			</div>

			<div class="panel-body">       

			  <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<label class="alert alert-sm alert-border-left alert-primary light alert-dismissable fontwn font2"><span class="glyphicon glyphicon-exclamation-sign mr10"></span>Sila Pastikan semua maklumat yang diisi adalah tepat</form></label>

<legend>MAKLUMAT ASAS</legend>

                <table class="table table-bordered table-responsive">
                    <tbody>
                        <tr style="background-color: #3BAFDA  ; color:white">
                            <td>No Kad Pengenalan</td>
                            <td>Nama</td>
                            <td>Agama</td>
                            <td>Kaum</td>
                            <td>Jantina</td>
                        </tr>
                        <tr>
                            <td>
                            <?php echo $form->textField($model,'ic',array('class'=>'form-control wauto', 'readOnly'=>'true')); ?>
                            <?php echo $form->error($model,'ic'); ?>    
                            </td>
                            <td>
                            <?php echo $form->textField($model,'nama',array('class'=>'form-control wauto', 'readOnly'=>'true')); ?>
                            <?php echo $form->error($model,'nama'); ?>
                            </td>
                            <td>
                            <?php echo $form->dropDownList($model,'agama', $agama ,array('class'=>'form-control wauto', 'disabled'=>'true')); ?>
                            <?php echo $form->error($model,'agama'); ?>
                            </td>
                            <td>
                            <?php echo $form->dropDownList($model,'keturunan', $kaum ,array('class'=>'form-control wauto', 'disabled'=>'true')); ?>
                            <?php echo $form->error($model,'keturunan'); ?>    
                            </td>
                            <td>
                            <?php echo $form->textField($model,'jantina',array('class'=>'form-control wauto', 'readOnly'=>'true')); ?>
                            <?php echo $form->error($model,'jantina'); ?>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-bordered table-responsive mt20">
                    <tbody>
                        <tr style="background-color: #3BAFDA  ; color:white">
                            <td>Tarikh Lahir</td>
                            <td>Negeri Kelahiran</td>
                            <td>Status Perkahwinan</td>
                            <td>Pekerjaan</td>
                            <td>Pendapatan (RM)</td>
                        </tr>
                        <tr>
                            <td>
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
                            </td>
                            <td>
                            <?php echo $form->dropDownList($model,'negeri_kelahiran', $negeri ,array('class'=>'form-control wauto', 'disabled'=>'true')); ?>
                            <?php echo $form->error($model,'negeri_kelahiran'); ?>    
                            </td>
                            <td> 
                            <?php echo $form->textField($model,'statuskahwin',array('class'=>'form-control wauto', 'readOnly'=>'true')); ?>
                            </td>
                            <td><?php echo $form->dropDownList($model,'pekerjaan', $pekerjaan ,array('class'=>'form-control wauto', 'disabled'=>'true')); ?>
                            <?php echo $form->error($model,'pekerjaan'); ?>    </td>
                            <td><?php echo $form->textField($model,'pendapatan',array('class'=>'form-control w100', 'readOnly'=>'true')); ?></td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-bordered table-responsive mt20">
                    <tbody>
                        <tr style="background-color: #3BAFDA  ; color:white">
                            
                        </tr>
                        <tr>
                            
                        </tr>
                    </tbody>
                </table>

<legend class="mt20">ALAMAT DAN HUBUNGAN</legend>

                <table class="table table-bordered table-responsive mt20">
                    <tbody>
                        <tr style="background-color: #3BAFDA  ; color:white">
                            <td>Alamat</td>
                            <td>Poskod</td>
                            <td>Daerah</td>
                            <td>Negeri</td> 
                        </tr>
                        <tr>
                            <td>
                             <?php echo $form->textArea($model,'alamat',array('class'=>'form-control wauto', 'readOnly'=>'true')); ?>
                            </td>
                            <td>
                             <?php echo $form->textField($model,'poskod',array('class'=>'form-control wauto', 'readOnly'=>'true')); ?>
                            </td>
                            <td>
                            <?php echo $form->dropDownList($model,'daerah', $daerah ,array('class'=>'form-control wauto', 'disabled'=>'true')); ?>
                            <?php echo $form->error($model,'daerah'); ?>    
                            </td>
                            <td>
                            <?php echo $form->dropDownList($model,'negeri', $negeri ,array('class'=>'form-control wauto', 'disabled'=>'true')); ?>
                            <?php echo $form->error($model,'negeri'); ?>    
                            </td>   
                        </tr>
                    </tbody>
                </table>

                <table class="table table-bordered table-responsive mt20">
                    <tbody>
                        <tr style="background-color: #3BAFDA  ; color:white">
                            <td>Kampung</td>
                            <td>Emel</td>
                            <td>No Telefon</td>
                        </tr>
                        <tr>
                            <td><?php echo $form->textField($model,'kampung',array('class'=>'form-control wauto', 'readOnly'=>'true')); ?></td>
                            <td>
                             <?php echo $form->textField($model,'email',array('class'=>'form-control wauto', 'readOnly'=>'true')); ?>
                            </td>
                            <td>
                             <?php echo $form->textField($model,'telefon',array('class'=>'form-control wauto', 'readOnly'=>'true')); ?>
                            </td> 
                        </tr>
                    </tbody>
                </table>


<legend class="mt20">PENGHANTARAN</legend>
 
                       <div class="mt20 mln">

                       <!-- <label class="alert alert-sm alert-border-left alert-danger light alert-dismissable fontwn font2"><span class="glyphicon glyphicon-exclamation-sign mr10"></span>Selepas Maklumat Dihantar Untuk Pengesahan, Pengemaskinian Data Tidak Boleh Lagi Dibuat</form></label> -->

                       <div class="col-lg-12 pln">

                       <div class="col-lg-3 pln">
<?php echo CHtml::link('<i class="fa fa-arrow-left mr10 pull-left"></i> ISI SEMULA', array('/orangasli/tambahdata/'.$model['orangasli_id']), array('class'=>'btn btn-primary'));?>
						</div>

                      <div class="col-lg-9">
    <?php echo CHtml::tag('button', array('class' => 'btn btn-primary'),'<i class="fa fa-upload mr10"></i> Hantar Maklumat Pendaftaran [ ' . $model['nama'] . " ]" );?>
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
</section>

<?php $this->endWidget(); ?>