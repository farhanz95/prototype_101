<?php
/* @var $this OrangasliController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kad Bancian',
);

?>

<section id="content">
	<div class="panel">
		<div class="panel panel-dark">
			<div class="panel-heading">
				<i class="fa fa-credit-card mr10"></i> Senarai Bancian
			</div>

			<div class="panel-body">

             <?php echo CHtml::link('<span class="fa fa-plus mr5"></span> Kad Bancian Baru',array('/kadbancian/create'),array('class'=>'btn btn-primary br24 ml2 mb10')) ?>

            <?php echo CHtml::link('<span class="fa fa-list mr5"></span> Bank Soalan Bancian',array('/kadbancian/formsoalan'),array('class'=>'btn btn-info br24 ml2 mb10')) ?>

            <?php echo CHtml::link('<span class="glyphicon glyphicon-stats" mr5"></span> Laporan Bancian',array('/kadbancian/laporanbancian'),array('class'=>'btn btn-alert br24 ml2 mb10')) ?>

					<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'kadbancian-grid',
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
								'name' => 'keluargakadbanci',
                                'value' => '$data->keluargakadbanci',
                                 
                            ),
                            array(
                                'name' => 'no_rumah',
                                'value' => '$data->no_rumah',
                                 
                            ),
                            array(
                                'name' => 'kampung',
                                'value' => '$data->kampung',
                                 
                            ),
                            array(
                                'name' => 'daerah',
                                'value' => '$data->daerah',
                                 
                            ),
                            array(
								'name' => 'negeri',
                                'value' => '$data->negeri',
                                 
                            ),
                            array(
								'name' => 'tarikh',
                                'value' => '$data->tarikh',
                                 
                            ),
							array(
                                'name' => 'statuscetakan',
                                'type' => 'raw',
                                'value' => '"<div class=\"label label-".($data->statuscetakan0->label)."\">".$data->statuscetakan0->name."</div>"',
                                'filter'=>CHtml::activeDropdownlist($model, 'statuscetakan', array('1'=>'Belum Dicetak', '2'=>'Sudah Dicetak'),array('empty'=>'--','class'=>'form-control')),
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
                                            'url'=>'Yii::app()->controller->createUrl("/kadbancian/view", array("id"=>$data->kadbancian_id))',
                                            'label' => '<i class="fa fa-search"></i>',
                                        ),
                                         'update' => array(
                                            'visible' => 'true',
                                            'options' => array('rel' => 'tooltip', 'data-toggle' => 'tooltip', 'title' => Yii::t('app', 'Kemaskini'), 'class'=>'btn btn-info btn-xs mr5'),
                                            'url'=>'Yii::app()->controller->createUrl("/kadbancian/update", array("id"=>$data->kadbancian_id))',
                                            'label' => '<i class="fa fa-pencil"></i>',
                                        ),
                                        'delete' => array(
                                            'visible' => 'true',
                                            'options' => array('rel' => 'tooltip', 'data-toggle' => 'tooltip', 'title' => Yii::t('app', 'Delete'), 'class'=>'btn btn-danger btn-xs mr5'),
                                            'url'=>'Yii::app()->controller->createUrl("/kadbancian/delete", array("id"=>$data->kadbancian_id))',
                                            'label' => '<i class="fa fa-trash"></i>',
                                        ),
                                        'kadbanci' => array(
                                            'visible' => '$data->statuscetakan0->id == 1',
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



