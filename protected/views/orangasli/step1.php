<?php
/* @var $this OrangasliController */
/* @var $model Orangasli */

$this->breadcrumbs=array(
	'Pendaftaran Orang Asli'=>array('index'),
	'Kemasukan Data Negeri dan Daerah',
);

?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'orangasli-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal', 'role'=>'form'),
)); ?> 

<?php 

$negeri = ListNegeri::model()->findAll();
$negeri = CHtml::listData($negeri, 'list_state_id','list_state_nicename');

$daerah = ListDaerah::model()->findAll();
$daerah = CHtml::listData($daerah, 'list_district_id','list_district_name');

$kampungname = ListKampung::model()->findAll();
$kampungname = CHtml::listData($kampungname, 'kampung_name', 'kampung_name');

$a = 0;

foreach($kampungname as $name)
{
	$kampung[$a] = $name;
	$a++;
}

 

 ?>
    
<style>
       .ui-autocomplete {
            max-height: 200px;
            overflow-y: auto;
            /* prevent horizontal scrollbar */
            overflow-x: hidden;
            /* add padding to account for vertical scrollbar */
            padding-right: 20px;
        } 
</style>

<section id="content">
	<div class="panel">
		<div class="panel panel-dark">
			<div class="panel-heading">
				<i class="fa fa-user-plus mr10"></i> Pendaftaran Orang Asli Baru
			</div>

			<div class="panel-body">

			<a class="btn btn-success br24 mb20 approve-Modal"><span class="fa fa-search mr5"></span><span class="fa fa-credit-card mr10"></span>MyKad Reader</a>

			<div class="alert alert-sm alert-border-left alert-primary light alert-dismissable">
					<font size="2em">
					Sila masukkan <a class="text-dark" href="<?php echo Yii::app()->request->baseUrl ?>/index.php/orangasli/create">Negeri, Daerah dan Kampung </a> Orang Asli yang akan didaftarkan ke dalam sistem </br>Setelah data dimasukkan pilih untuk membuat <a class="text-dark">Pendaftaran Keluarga atau Individu</a> dan sistem akan mengeluarkan borang pendaftaran
					</font>
			</div>

			<table class="table table-bordered table-responsive mb20">
			<tr>
				<td class="w200 text-right bold">Negeri</td>
				<td>
					<?php echo $form->dropDownList($model, 'negeri', $negeri, array('prompt'=>'--Pilih Negeri--', 'class'=>'form-control w300',
						'ajax'=>array(
							'type'=>'POST',
							'url'=>Yii::app()->createUrl('orangasli/getdistrict'),
							'update'=>'#Orangasli_daerah'
						)
						)); ?>
                	<?php echo $form->error($model,'negeri'); ?>
				</td>
			</tr>
				<td class="w200 text-right bold">Daerah</td>
				<td>
					<?php echo $form->dropDownList($model, 'daerah', array(), array('prompt'=>'--Pilih Daerah--', 'class'=>'form-control w300')); ?>
                	<?php echo $form->error($model,'daerah'); ?>
				</td>
			<tr>
				<td class="w200 text-right bold">
                    <?php echo $form->labelEx($model,'kampung', array('class')); ?>  
                </td>
				<td>
					<?php 

					$this->widget('zii.widgets.jui.CJuiAutoComplete',array(
					    'model'=>$model,
                        'attribute'=>'kampung',
                        'name'=>'kampung',
					    'source'=>$kampung,
					    // additional javascript options for the autocomplete plugin
					    'options'=>array(
					        'minLength'=>'1',
					        'size'=>'5',   	
					    ),
					    'htmlOptions'=>array(
                        	'class'=>'form-control w400',
                    
                        )
					));

					 ?>
				</td>	 
			</tr>
			</table>

<div class="col-lg-12">
<div class="col-lg-2"></div>

<?php echo CHtml::tag('button', array('class' => 'btn btn-primary br24'), $model->isNewRecord ? '<i class="fa fa-user-plus mr10"></i> Pendaftaran Individu' :'<i class="fa fa-pencil mr10"></i> Kemaskini Maklumat Pendaftaran Individu');?>

<?php echo CHtml::link('<span class="fa fa-group keluarga-button"></span><span class="fa fa-plus mln mr5" style="font-size:8px !important"></span> Pendaftaran Keluarga',array('/keluarga/pendaftarankeluarga'),array('class'=>'btn btn-primary br24 ml2')) ?>
</div>

			</div>
		</div>
	</div>
</section>
 

<?php $this->endWidget(); ?>


<!-- Modal Approve -->
<div class="modal fade" id="approve-Modal" tabindex="-1" role="dialog" aria-labelledby="approve-ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="approve-ModalLabel"><i class="fa fa-search mr10"></i> MyKad Reader </h4>
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

             				<div class="alert alert-primary alert-sm alert-border-left light dismissable">
             				  	Aplikasi scan MyKad Reader sedang dalam pembinaan
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