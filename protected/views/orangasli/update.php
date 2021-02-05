<?php
/* @var $this OrangasliController */
/* @var $model Orangasli */

$this->breadcrumbs=array(
	'Orang Asli'=>array('index'),
	$model->nama=>array('view','id'=>$model->orangasli_id),
	'Kemaskini',
);

?>

<section id="content">
	<div class="panel">
		<div class="panel panel-dark">
			<div class="panel-heading">
				<i class="fa fa-user-plus mr10"></i> Pendaftaran Orang Asli
			</div>

			<div class="panel-body">

<?php $this->renderPartial('_formIndividu', array('model'=>$model)); ?>

			</div>
		</div>
	</div>
</section>