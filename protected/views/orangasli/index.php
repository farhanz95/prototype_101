<?php
/* @var $this OrangasliController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Senarai Orang Asli Berdaftar',
);

?>

<section id="content">
	<div class="panel">
		<div class="panel panel-dark">
			<div class="panel-heading">
				<i class="fa fa-user mr10"></i> Senarai Orang Asli Berdaftar
			</div>

			<div class="panel-body">

             <?php echo CHtml::link('<span class="fa fa-user-plus mr5"></span> Pendaftaran Orang Asli Baru',array('/orangasli/step1'),array('class'=>'btn btn-primary br24 ml2 mb10')) ?>

              <?php echo CHtml::link('<span class="fa fa-edit mr5"></span> Penambahan Data Orang Asli Sedia Ada',array('/orangasli/pilihdaftar'),array('class'=>'btn btn-alert br24 ml2 mb10')) ?>

					<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'orangasli-grid',
						'dataProvider'=>$model->search(),
						'summaryText'=>'Paparan {start} hingga {end} dari {count} keseluruhan',
						'filter'=>$model,
						'columns'=>array(
                            array(
                                'header'=>'Bil',
                                'class'=>'CounterColumn',
                                'htmlOptions'=>array('style'=>'text-align:center', 'width'=>'5%')
                            ),
							array(
								'name' => 'nama',
                                'value' => '$data->nama',
                                 
                            ),
                            array(
								'name' => 'ic',
                                'value' => '$data->ic',
                               
                            ),
                            array(
								'name' => 'dob',
                                'value' => '$data->dob',
                                'htmlOptions'=>array('style'=>'width:12%'),
                            ), 
                            array(
								'name' => 'keturunan',
                                'value' => '$data->keturunan0->nama',
                                 'filter'=>CHtml::activeDropdownlist($model, 'jantina', array('Negrito'=>'Negrito', 'Senoi'=>'Senoi', 'Melayu Asli'=>'Melayu Asli'),array('empty'=>'','class'=>'form-control')),
                                
                            ),
                            array(
								'name' => 'jantina',
                                'value' => '$data->jantina',
                                'filter'=>CHtml::activeDropdownlist($model, 'jantina', array('Lelaki'=>'Lelaki', 'Perempuan'=>'Perempuan'),array('empty'=>'--','class'=>'form-control')),
                            ),
                            array(
                                'name' => 'status_orangasli_id',
                                'type' => 'raw',
                                'value' => '"<div class=\"label label-".($data->statusOrangasli->status_orangasli_label)."\">".$data->statusOrangasli->status_orangasli_name."</div>"',
                                'filter'=>CHtml::activeDropdownlist($model, 'status_orangasli_id', array('1'=>'Baru Didaftarkan', '2'=>'Dalam Proses Pendaftaran','3'=>'Selesai'),array('empty'=>'--','class'=>'form-control')),
                            ),
							array(
                                'template'=>'{view1}{view2}{update}{update2}{keluarga}{tambah}{delete}{kadbanci}',

                                'class'=>'CButtonColumn',
                                'header'=>'Tindakan',
                                'htmlOptions'=>array('style'=>'width:15%'),
                                'buttons'=>array(
                                        'view1' => array(
                                            'visible' => '$data->statusOrangasli->status_orangasli_id == 1',
                                            'options' => array('rel' => 'tooltip', 'data-toggle' => 'tooltip', 'title' => Yii::t('app', 'Lihat'), 'class'=>'btn btn-primary btn-xs mr5'),
                                            'url'=>'Yii::app()->controller->createUrl("/orangasli/success", array("id"=>$data->orangasli_id))',
                                            'label' => '<i class="fa fa-search"></i>',
                                        ),
                                        'view2' => array(
                                            'visible' => '$data->statusOrangasli->status_orangasli_id == 2 || $data->statusOrangasli->status_orangasli_id == 3',
                                            'options' => array('rel' => 'tooltip', 'data-toggle' => 'tooltip', 'title' => Yii::t('app', 'Lihat'), 'class'=>'btn btn-primary btn-xs mr5'),
                                            'url'=>'Yii::app()->controller->createUrl("/orangasli/view", array("id"=>$data->orangasli_id))',
                                            'label' => '<i class="fa fa-search"></i>',
                                        ),
                                         'update' => array(
                                            'visible' => '$data->statusOrangasli->status_orangasli_id == "" || $data->statusOrangasli->status_orangasli_id == 1',
                                            'options' => array('rel' => 'tooltip', 'data-toggle' => 'tooltip', 'title' => Yii::t('app', 'Kemaskini'), 'class'=>'btn btn-info btn-xs mr5'),
                                            'url'=>'Yii::app()->controller->createUrl("/orangasli/update", array("id"=>$data->orangasli_id))',
                                            'label' => '<i class="fa fa-pencil"></i>',
                                        ),
                                         'update2' => array(
                                            'visible' => '$data->statusOrangasli->status_orangasli_id == "2" ',
                                            'options' => array('rel' => 'tooltip', 'data-toggle' => 'tooltip', 'title' => Yii::t('app', 'Kemaskini'), 'class'=>'btn btn-info btn-xs mr5'),
                                            'url'=>'Yii::app()->controller->createUrl("/orangasli/kemaskinidatatambahan", array("id"=>$data->orangasli_id))',
                                            'label' => '<i class="fa fa-pencil"></i>',
                                        ),
                                         'keluarga' => array(
                                            'visible' => '$data->statusOrangasli->status_orangasli_id == "2" ',
                                            'options' => array('rel' => 'tooltip', 'data-toggle' => 'tooltip', 'title' => Yii::t('app', 'Kemaskini Data Keluarga'), 'class'=>'btn btn-success btn-xs mr5'),
                                            'url'=>'Yii::app()->controller->createUrl("/keluarga/pendaftarankeluarga")',
                                            'label' => '<i class="fa fa-group"></i>',
                                        ),
                                         'tambah' => array(
                                            'visible' => '$data->statusOrangasli->status_orangasli_id == 1',
                                            'options' => array('rel' => 'tooltip', 'data-toggle' => 'tooltip', 'title' => Yii::t('app', 'Tambah Data'), 'class'=>'btn btn-alert btn-xs mr5'),
                                            'url'=>'Yii::app()->controller->createUrl("/orangasli/tambahdata", array("id"=>$data->orangasli_id))',
                                            'label' => '<i class="fa fa-plus"></i>',
                                        ),
                                        'delete' => array(
                                            'visible' => 'true',
                                            'options' => array('rel' => 'tooltip', 'data-toggle' => 'tooltip', 'title' => Yii::t('app', 'Delete'), 'class'=>'btn btn-danger btn-xs mr5'),
                                            'url'=>'Yii::app()->controller->createUrl("/orangasli/delete", array("id"=>$data->orangasli_id))',
                                            'label' => '<i class="fa fa-trash"></i>',
                                        ),
                                        'kadbanci' => array(
                                            'visible' => '$data->statusOrangasli->status_orangasli_id == 3',
                                            'options' => array('rel' => 'tooltip', 'data-toggle' => 'tooltip', 'title' => Yii::t('app', 'Cetak Kad Banci'), 'class'=>'btn btn-warning btn-xs mr5'),
                                            'url'=>'Yii::app()->controller->createUrl("/orangasli/print")',
                                            'label' => '<i class="fa fa-print"></i>',
                                        ),
                                    ),

                            ),	
						),
					)); ?>

			</div>
		</div>
	</div>
</section>



