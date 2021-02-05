<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	'Kad Bancian'=>'index',
	'Bank Soalan',
);
?>

<?php


$negeri = ListNegeri::model()->findAll();
$negeri = CHtml::listData($negeri, 'list_state_nicename','list_state_nicename');

$daerah = ListDaerah::model()->findAll();
$daerah = CHtml::listData($daerah, 'list_district_name','list_district_name');

$keluarga = Keluarga::model()->findAll();
$keluarga = CHtml::listData($keluarga, 'nama_kir','nama_kir');


?>

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'kadbancian-form',
    'enableAjaxValidation'=>false,
    'htmlOptions'=>array('class'=>'form-horizontal', 'role'=>'form'),
)); ?>

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
                	<i class="glyphicon glyphicon-list-alt mr10"></i>Pengeluaran Kad Bancian Baru
                </div>
                <div class="panel-body h-400">

              
             
            	<div class="col-lg-12 mt20">
            	<select type="text" id="inputStandard" class="form-control" empty="Pilihan Keluarga..">
            		<option>[ Pilihan Keluarga Bagi Pengeluaran Kad Banci ]</option>
            		<?php foreach($keluarga as $k) { ?>
            		<option><?php echo $k ?></option>
            		<?php } ?>
            	</select>
            	</div>

                <div class="col-lg-12 mt20">
        <?php echo CHtml::link('<span class="fa fa-group mr10"></span>Lihat Keseluruhan Senarai Keluarga',array('keluarga/index'),array('class'=>'btn btn-system')) ?>
                    <a ></a>
                </div>

            	<!-- <div class="col-lg-12 mt20">
            	<select type="text" id="inputStandard" class="form-control" empty="Pilihan Negeri..">
            		<option>[ Negeri ]</option>
            		<?php foreach($negeri as $k) { ?>
            		<option><?php echo $k ?></option>
            		<?php } ?>
            	</select>
            	</div>
            	<div class="col-lg-12 mt20">
            	<select type="text" id="inputStandard" class="form-control" empty="Pilihan Daerah..">
            		<option>[ Daerah ]</option>
            		<?php foreach($daerah as $k) { ?>
            		<option><?php echo $k ?></option>
            		<?php } ?>
            	</select>
            	</div> -->
            	<div class="col-lg-12 mt20">
            	<?php 
                    $pattern = 'dd/MM/yyyy';
                    $timestamp = strtotime($model->tarikh);
                    if ($timestamp !== false)
                            $model->tarikh = Yii::app()->getDateFormatter()->format($pattern, $timestamp);
                    else
                            $model->tarikh =  '';
                    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                            'model'=>$model,
                            'attribute'=>'tarikh',
                            'options'=>array(
                                    'dateFormat'=>'dd/mm/yy',
                                    'minDate'=>'d',//day can choose >= tomorrow
                                    ),
                            'htmlOptions'=>array(
                                    'class'=>'form-control',
                                    'type'=>'number',
                                    'placeholder'=>'[ Tarikh Luput Kad Bancian ] - dd/mm/yy'
                                    )
                            
                    ));
                ?>
            	</div>
            	<div class="text-center">
            	<a class="btn btn-success mt20" href="formsoalan"><i class="fa fa-plus pr10"></i> Tambah Kad Bancian</a>
            	</div>
                </div>
			</div>
		</div>

		<div class="col-sm-6 col-lg-6">
            <div class="panel panel-dark">
                <div class="panel-heading ">
                	<span class="h-icon"><i class="glyphicons glyphicons-circle_question_mark"></i></span><span class="panel-title text-white-dark ">Proses Pengeluaran Kad Banci</span>
                </div>
                <div class="panel-body h-450">
                	<div class="col-lg-3">
                	<span class="mt20 pull-right glyphicons glyphicons-edit fs60"></span>
                	</div>
                	<div class="col-lg-9">
                	<h3>Pengisian borang pendaftaran</h3>
                	<ul>
                	<li>Setiap orang asli hendaklah didaftarkan ke dalam sistem</li>
                	<li>Pendaftaran boleh dibuat mengikut keluarga atau individu</li>
                	<li>Pendaftaran hendaklah dibuat oleh keseluruhan anggota keluarga</li>
                	</ul>
                	</div>

                	<div class="col-lg-3">
                	<span class="mt20 pull-right glyphicons glyphicons-group fs60"></span>
                	</div>
                	<div class="col-lg-9">
                	<h3>Semakan KIR (Ketua Isi Rumah)</h3>
                	<ul>
                	<li>KIR disemak mengikut nombor rujukan atau No. K/P Baru</li>
                	<li>Pengeluaran kad bancian boleh diteruskan jika semua syarat ditepati</li>
                	</ul>
                	</div>

                	<div class="col-lg-3">
                	<span class="mt20 pull-right glyphicons glyphicons-charts fs60"></span>
                	</div>
                	<div class="col-lg-9">
                	<h3>Proses Pengeluaran dan cetakan</h3>
                	<ul>
                	<li>Sistem akan mengeluarkan soalan kad bancian</li>
                    <li>Kad bancian boleh dicetak setelah semua proses selesai</li>
                	</ul>
                	</div>

                </div>
			</div>
		</div>
	</div>
</section>

<?php $this->endWidget() ?>

<?php
Yii::app()->clientScript->registerScript(
    'form_carian',
    "
    $('.maklumansalah').hide();
    $('.maklumanbetul').hide();

    $('#carian').on('change', function() {
      if ( this.value == '1')
      {
        $('.maklumansalah').hide();
        $('.maklumanbetul').fadeIn();
      }
      else
      {
        $('.maklumanbetul').hide();
        $('.maklumansalah').fadeIn();
      }
    });
 
    ",
CClientScript::POS_READY
);
?>