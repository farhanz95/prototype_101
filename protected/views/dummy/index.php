<?php
/* @var $this DummyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dummies',
);

?>

<section id="content">
	<div class="panel">
		<div class="panel panel-dark">
			<div class="panel-heading">
				<i class="glyphicon glyphicon-hdd mr10"></i> Senarai Dummy Data
			</div>

			<div class="panel-body">

			<?php echo CHtml::link('<span class="glyphicon glyphicon-hdd mr5"></span> Data Dummy Baru',array('/dummy/create'),array('class'=>'btn btn-primary br24 ml2 mb10')) ?>

					<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'dummy-grid',
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
								'name' => 'value1',
                                'value' => '$data->value1',
                                 
                            ),
                            array(
								'name' => 'value2',
                                'value' => '$data->value2',
                               
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
                                            'url'=>'Yii::app()->controller->createUrl("/dummy/view", array("id"=>$data->id))',
                                            'label' => '<i class="fa fa-search"></i>',
                                        ),
                                         'update' => array(
                                            'visible' => 'true',
                                            'options' => array('rel' => 'tooltip', 'data-toggle' => 'tooltip', 'title' => Yii::t('app', 'Kemaskini'), 'class'=>'btn btn-info btn-xs mr5'),
                                            'url'=>'Yii::app()->controller->createUrl("/dummy/update", array("id"=>$data->id))',
                                            'label' => '<i class="fa fa-pencil"></i>',
                                        ),
                                        'delete' => array(
                                            'visible' => 'true',
                                            'options' => array('rel' => 'tooltip', 'data-toggle' => 'tooltip', 'title' => Yii::t('app', 'Delete'), 'class'=>'btn btn-danger btn-xs mr5'),
                                            'url'=>'Yii::app()->controller->createUrl("/dummy/delete", array("id"=>$data->id))',
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


