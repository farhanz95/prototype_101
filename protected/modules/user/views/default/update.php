<?php
/* @var $this DefaultController */
/* @var $model User */

Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/user_form_ajax.js');

$this->breadcrumbs=array(
	'Pengguna'=>array('index'),
	$model->login=>array('view','id'=>$model->login),
	'Kemaskini',
);

?>
<section id="content" class="animated fadeIn">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
            <div class="panel panel-dark">
                <div class="panel-heading bg-dark">
                	<span class="panel-title">Kemaskini Maklumat - <?php echo $model->login; ?></span>
                </div>
                <div class="panel-body">
                	<?php $this->renderPartial('_form', array('user'=>$model, 'user_assignments'=>$user_assignments, 'update'=>$update)); ?>
                </div>
			</div>
		</div>
	</div>
</section>