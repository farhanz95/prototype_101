<?php

$this->breadcrumbs=array(
	'Penyimpanan Data',
);

?>
 

<section id="content">
 
<div class="panel">
	<div class="panel panel-dark">
		<div class="panel-heading bg-dark">
			<span class="text-white"><span class="fa fa-hdd mr10"></span>Senarai File Backup</span>
		</div>

		<div class="panel-body">

        <div class="alert alert-primary alert-border-left alert-dismissable">
        <div class="col-lg-1">
            <i class="fs50 glyphicons glyphicons-lightbulb"></i>
        </div>
        Sila pastikan database anda dibuat backup sekerapnya. Klik pada butang Simpan Data untuk manually backup database.<br>
        File backup disimpan di folder [<span class="fw600">/_backups/</span>] dan boleh dimuatturun dari senarai di bawah. <br>
        Backup terbaru anda disimpan di bahagian atas. Pastikan anda memuat turun backup terakhir anda dan buang yang selebihnya.</div>    

<div class="row pl10 mb20">
<?php echo CHtml::link('<i class="fa fa-plus mr10"></i>Simpan Data',array('/backup/create'),array('class'=>'btn btn-system ml2')) ?>
<?php echo CHtml::link('<i class="fa fa-upload mr10"></i>Muatnaik Data',array('/backup/create'),array('class'=>'btn btn-system ml10')) ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	            'id'=>'backup-grid',
	            'dataProvider'=>$model->search(),
	            'summaryText'=>'Paparan {start} hingga {end} dari {count} keseluruhan',
	            // 'filter'=>$model,
	            'columns'=>array(
	                array(
	                    'header'=>'No',
	                    'class'=>'CounterColumn',
	                    'htmlOptions'=>array('width'=>'5%')                                
	                ),
	                array(
	                    'name' => 'Nama',
	                    'type' =>'raw',
                        'value'=>'"<i class=\"fa fa-hdd-o fa-3x mr15\"></i><span class=\"va-s\">".$data["name"]."</span>"',
	                    'filter'=>CHtml::activeTextField($model, 'name',array("placeholder"=>"","class"=>"form-control"))
	                ),
                     array(
                        'header' => 'Size (KB)',
                        'value' => '11',
                        'htmlOptions'=>array('width:10%'),
                        'filter'=>CHtml::activeTextField($model, 'date',array("placeholder"=>"","class"=>"form-control"))
                    ),
	                array(
	                    'name' => 'Tarikh',
	                    'value' => '$data->date',
	                    'filter'=>CHtml::activeTextField($model, 'date',array("placeholder"=>"","class"=>"form-control"))
	                ),
	                array(
	                    'name' => 'Keterangan',
	                    'value' => '$data->description',
	                    'filter'=>CHtml::activeTextField($model, 'description',array("placeholder"=>"","class"=>"form-control"))
	                ),
	   				array(
                                'template'=>'{restore}{view}{delete}',

                                'class'=>'CButtonColumn',
                                'header'=>'Tindakan',
                                'htmlOptions'=>array('style'=>'width:15%'),
                                'buttons'=>array(
                                		'restore' => array(
                                            'visible' => 'true',
                                            'options' => array('rel' => 'tooltip', 'data-toggle' => 'tooltip', 'title' => Yii::t('app', 'Restore'), 'class'=>'btn btn-success btn-xs mr5 approve-Modal'),
                                            'url'=>'Yii::app()->controller->createUrl("/backup/restore", array("id"=>$data->id))',
                                            'label' => '<i class="fa fa-refresh"></i>',
                                        ),  
                                        'view' => array(
                                            'visible' => 'true',
                                            'options' => array('rel' => 'tooltip', 'data-toggle' => 'tooltip', 'title' => Yii::t('app', 'Lihat'), 'class'=>'btn btn-primary btn-xs mr5'),
                                            'url'=>'Yii::app()->controller->createUrl("/backup/view", array("id"=>$data->id))',
                                            'label' => '<i class="fa fa-search"></i>',
                                        ),  
                                        'delete' => array(
                                            'visible' => 'true',
                                            'options' => array('rel' => 'tooltip', 'data-toggle' => 'tooltip', 'title' => Yii::t('app', 'Delete'), 'class'=>'btn btn-danger btn-xs mr5'),
                                            'url'=>'Yii::app()->controller->createUrl("/backup/delete", array("id"=>$data->id))',
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


<!-- Modal Approve -->
<div class="modal fade" id="approve-Modal" tabindex="-1" role="dialog" aria-labelledby="approve-ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="approve-ModalLabel"><i class="fa fa-refresh mr10"></i> Muat Turun Backup [db_backup_2016.05.20_20.42.44.sql.sql] </h4>
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

                       <div class="mt20 mln">

                       <div class="alert alert-sm alert-border-left alert-primary light alert-dismissable fontwn font2"><span class="glyphicon glyphicon-exclamation-sign mr10"></span>Adakah anda pasti untuk restore database <b class="text-dark">db_backup_2016.03.15_23.42.44.sql</b></form></div>

                       <div class="col-lg-12">

                       <div class="col-lg-5">
<?php echo CHtml::link('<i class="fa fa-arrow-left mr10 pull-left"></i> TIDAK, KEMBALI', array(''), array('class'=>'btn btn-info br24'));?>
						</div>

                      <div class="col-lg-7">
<?php echo CHtml::link('<i class="fa fa-upload mr10"></i> YA RESTORE', array(''), array('class'=>'btn btn-primary pull-right'));?>
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