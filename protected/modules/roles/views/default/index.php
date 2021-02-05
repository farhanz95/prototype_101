<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
    'Senarai Jawatan'
);

?>
<section id="content" class="animated fadeIn">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
            <div class="panel panel-dark">
                <div class="panel-heading bg-dark">
                	<span class="panel-title">Senarai Jawatan</span>
                </div>
                <div class="panel-body">
                	<div class="form-group ml10">
                		<?php echo CHtml::link('Daftar Jawatan Baru',array('/roles/default/createroles'),array('class'=>'create-button btn btn-default')); ?>
                	</div>
                	<div class="form-group">
                		<div class="col-lg-12">
                			<?php 
                				$this->widget('zii.widgets.grid.CGridView', array(
									'id'=>'roles-grid',
									'dataProvider'=>$authitem->roles_search(),
                                    'summaryText'=>'Paparan {start} hingga {end} dari {count} keseluruhan',
									'filter'=>$authitem,
									'columns'=>array(
                                        array(
                                            'header'=>'Bil',
                                            'class'=>'CounterColumn',
                                            'htmlOptions'=>array('style'=>'text-align:center', 'width'=>'5%')
                                        ),
										array(
                                            'header'=>'Nama Jawatan',
                                            'name'=>'name',
                                        ),
										array(
											'class'=>'CButtonColumn',
											'template'=>'{update} {delete}',
											'buttons'=>array(
                                                'update' => array(
                                                    'url'=>'Yii::app()->controller->createUrl("/roles/default/updateroles", array("id"=>$data->name))',
                                                ),
                                                'delete' => array(
                                                    'url'=>'Yii::app()->controller->createUrl("/roles/default/deleteroles", array("id"=>$data->name))',
                                                ),
                                            ),
										),
									),
								)); 
                			?>
						</div>
					</div>
                </div>
			</div>
		</div>
	</div>
</section>