<?php
/* @var $this DefaultController */
/* @var $model User */

$this->breadcrumbs=array(
	'Pengguna'=>array('index'),
	'Pengurusan',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");

?>

<section id="content" class="animated fadeIn">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
            <div class="panel panel-dark">
                <div class="panel-heading bg-dark">
                	<span class="panel-title">Pengurusan Pengguna</span>
                </div>
                <div class="panel-body">
                	<div class="form-group">
                		<?php echo CHtml::link('Carian Terperinci','#',array('class'=>'search-button btn btn-default')); ?>
                		<?php echo CHtml::link('Daftar Pengguna',array('/user/default/create'),array('class'=>'btn btn-default')); ?>
                	</div>
                	<div class="search-form" style="display:none">
                		<?php $this->renderPartial('_search',array(
							'model'=>$model,
						)); ?>
					</div><!-- search-form -->

					<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'user-grid',
						'dataProvider'=>$model->search(),
						'summaryText'=>'Paparan {start} hingga {end} dari {end} keseluruhan',
						'filter'=>$model,
						'columns'=>array(
                            array(
                                'header'=>'Bil',
                                'class'=>'CounterColumn',
                                'htmlOptions'=>array('style'=>'text-align:center', 'width'=>'5%')
                            ),
							'login',
							'fullname',
							'email',
							'phone',
							array(
								'name' => 'status_name',
								'type' => 'raw',
                                'value' => '"<div class=\"label label-".($data->status->name=="Aktif"?\'success\':\'danger\')."\"><i class=\"fa fa-".($data->status->name=="Aktif"?\'check\':\'adjust\')." pr5\"></i>".$data->status->name."</div>"',
                                'filter'=>CHtml::dropdownlist ('User[status_name]', $model['status'],CHtml::listData(Status::model()->findAll(), 'name', 'name'),array('class'=>'form-control','empty'=>'Pilih Status'))
							),
							array(
								'class'=>'CButtonColumn',
								'htmlOptions'=>array('style'=>'text-align:center', 'width'=>'10%')
							),
						),
					)); ?>
                </div>
			</div>
		</div>
	</div>
</section>
