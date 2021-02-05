<?php
/* @var $this DefaultController */
/* @var $model User */

Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/user_form_ajax.js');

$this->breadcrumbs=array(
	'Pengguna'=>array('index'),
	'Daftar',
);

?>

<section id="content" class="animated fadeIn">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
            <div class="panel panel-dark">
                <div class="panel-heading bg-dark">
                	<span class="panel-title">Daftar Pengguna</span>
                </div>
                <div class="panel-body">
                	<?php $this->renderPartial('_form', array('user'=>$user, 'user_assignments'=>$user_assignments, 'update'=>$update)); ?>
                </div>
			</div>
		</div>
	</div>
</section>