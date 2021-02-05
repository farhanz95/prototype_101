<?php
/* @var $this BackupController */
/* @var $model Backup */

$this->breadcrumbs=array(
	'Penyimpanan Data'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Kemaskini',
);

 
?>

<section id="content">
	<div class="panel">
		<div class="panel panel-dark">
			<div class="panel-heading bg-dark">Kemaskini Data</div>

			<div class="panel-body">

				<?php $this->renderPartial('_form', array('model'=>$model)); ?>
				
			</div>

		</div>
	</div>
</section>
