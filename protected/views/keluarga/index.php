<?php
/* @var $this OrangasliController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Senarai Keluarga Orang Asli Berdaftar',
);

?>

<section id="content">
	<div class="panel">
		<div class="panel panel-dark">
			<div class="panel-heading">
				<i class="fa fa-user mr10"></i> Senarai Keluarga Orang Asli Berdaftar
			</div>

			<div class="panel-body">

             <?php echo CHtml::link('<span class="fa fa-user-plus mr5"></span> Pendaftaran Keluarga Orang Asli Baru',array('/keluarga/daftarkeluarga'),array('class'=>'btn btn-primary br24 ml2 mb10')) ?>

              <?php echo CHtml::link('<span class="fa fa-edit mr5"></span> Penambahan Data Keluarga Orang Asli Sedia Ada',array('/keluarga/pendaftarankeluarga'),array('class'=>'btn btn-alert br24 ml2 mb10')) ?>

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
								'name' => 'nama_kir',
                                'value' => '$data->nama_kir',
                               
                            ),
                           array(
								'name' => 'kampung_jkkk',
                                'value' => '$data->kampung_jkkk',
                               
                            ),
                            array(
                                'name' => 'status_ahli',
                                'type' => 'raw',
                                'value' => '"<div class=\"label label-".($data->statusAhli->status_orangasli_label)."\">".$data->statusAhli->status_orangasli_name."</div>"',
                                'filter'=>CHtml::activeDropdownlist($model, 'status_ahli', array('1'=>'Baru Didaftarkan', '2'=>'Dalam Proses Pendaftaran','3'=>'Selesai'),array('empty'=>'--','class'=>'form-control')),
                            ),
							array(
                                'template'=>'{view}{update}{delete}{kadbanci}',

                                'class'=>'CButtonColumn',
                                'header'=>'Tindakan',
                                'htmlOptions'=>array('style'=>'width:15%'),
                                'buttons'=>array(
                                        'view' => array(
                                            'visible' => 'true',
                                            'options' => array('rel' => 'tooltip', 'data-toggle' => 'tooltip', 'title' => Yii::t('app', 'Lihat'), 'class'=>'btn btn-primary btn-xs mr5'),
                                            'url'=>'Yii::app()->controller->createUrl("/keluarga/view", array("id"=>$data->keluarga_id))',
                                            'label' => '<i class="fa fa-search"></i>',
                                        ),
                                         'update' => array(
                                            'visible' => 'true',
                                            'options' => array('rel' => 'tooltip', 'data-toggle' => 'tooltip', 'title' => Yii::t('app', 'Kemaskini'), 'class'=>'btn btn-info btn-xs mr5'),
                                            'url'=>'Yii::app()->controller->createUrl("/keluarga/kemaskinidaftarkeluarga", array("id"=>$data->keluarga_id))',
                                            'label' => '<i class="fa fa-pencil"></i>',
                                        ),
                                        'delete' => array(
                                            'visible' => 'true',
                                            'options' => array('rel' => 'tooltip', 'data-toggle' => 'tooltip', 'title' => Yii::t('app', 'Delete'), 'class'=>'btn btn-danger btn-xs mr5'),
                                            'url'=>'Yii::app()->controller->createUrl("/keluarga/delete", array("id"=>$data->keluarga_id))',
                                            'label' => '<i class="fa fa-trash"></i>',
                                        ),
                                        'kadbanci' => array(
                                            'visible' => '$data->statusAhli->status_orangasli_id == 3',
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



