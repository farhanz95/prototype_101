<?php
/* @var $this DefaultController */

Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/task_form_ajax.js');

$this->breadcrumbs=array(
    'Jawatan'=>array('/roles'),
	$authitem->name,
);

Yii::app()->clientScript->registerScript('addtask', "
$('.addtask-button').click(function(){
    $('.addtask-form').toggle();
    return false;
});
");

?>
<section id="content" class="animated fadeIn">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
            <div class="panel panel-dark">
                <div class="panel-heading bg-dark">
                	<span class="panel-title">Senarai Tugas Untuk Jawatan (<?php echo $authitem->name; ?>)</span>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <?php echo CHtml::link('Tambah Tugasan Baru','#',array('class'=>'addtask-button btn btn-default')); ?>
                    </div>
                    <div class="addtask-form" style="display:none">
                        <?php $this->renderPartial('includes/task_select',array('itemchildren'=>$itemchildren, 'authitem'=>$authitem
                        )); ?>
                    </div><!-- addtask-form -->
                	<div class="form-group">
                		<div class="tasks col-lg-12">
                            <?php $this->renderPartial('includes/task_li',array('itemchildren'=>$itemchildren, 'authitem'=>$authitem
                            )); ?>
						</div>
					</div>
                </div>
			</div>
		</div>
	</div>
</section>