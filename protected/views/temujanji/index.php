<?php
/* @var $this TemujanjiController */
/* @var $model Temujanji */

$this->breadcrumbs=array(
	'Senarai Temujanji'=>array('index'),
);
?>

<section id="content">
	<div class="panel">
		<div class="panel panel-dark">
			<div class="panel-heading">
				<i class="fa fa-user mr10"></i> Senarai Temu Janji
			</div>

			<div class="panel-body">

             <!-- <?php echo CHtml::link('<span class="fa fa-user-plus mr5"></span> Temujanji Baru',array('/temujanji/create'),array('class'=>'btn btn-primary br24 ml2 mb10')) ?> -->

            <!--  <div class="alert alert-primary alert-sm alert-border-left light dismissable">
              Berikut adalah sena
             </div> -->

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
								'name' => 'negeri',
                                'value' => '$data->negeri',
                               
                            ),
                            array(
								'name' => 'daerah',
                                'value' => '$data->daerah',
                               
                            ), 
                            array(
								'name' => 'tarikh',
                                'value' => '$data->tarikh',
                               
                            ), 
                            array(
								'name' => 'tempat',
                                'value' => '$data->tempat',
                               
                            ), 
							array(
                                'template'=>'{view}{update}{delete}',

                                'class'=>'CButtonColumn',
                                'header'=>'Tindakan',
                                'htmlOptions'=>array('style'=>'width:15%'),
                                'buttons'=>array(
                                        'view' => array(
                                            'visible' => 'true',
                                            'options' => array('rel' => 'tooltip', 'data-toggle' => 'tooltip', 'title' => Yii::t('app', 'Lihat'), 'class'=>'btn btn-primary btn-xs mr5'),
                                            'url'=>'Yii::app()->controller->createUrl("/temujanji/view", array("id"=>$data->temujanji_id))',
                                            'label' => '<i class="fa fa-search"></i>',
                                        ),
                                         'update' => array(
                                            'visible' => 'true',
                                            'options' => array('rel' => 'tooltip', 'data-toggle' => 'tooltip', 'title' => Yii::t('app', 'Kemaskini'), 'class'=>'btn btn-info btn-xs mr5'),
                                            'url'=>'Yii::app()->controller->createUrl("/temujanji/update", array("id"=>$data->temujanji_id))',
                                            'label' => '<i class="fa fa-pencil"></i>',
                                        ),
                                        'delete' => array(
                                            'visible' => 'true',
                                            'options' => array('rel' => 'tooltip', 'data-toggle' => 'tooltip', 'title' => Yii::t('app', 'Delete'), 'class'=>'btn btn-danger btn-xs mr5'),
                                            'url'=>'Yii::app()->controller->createUrl("/temujanji/delete", array("id"=>$data->temujanji_id))',
                                            'label' => '<i class="fa fa-trash"></i>',
                                        ),
                                    ),

                            ),	
						),
					)); ?>

			</div>
		</div>
	</div>
</section>


