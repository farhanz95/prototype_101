<?php
/* @var $this BackupController */
/* @var $model Backup */

$this->breadcrumbs=array(
	'Penyimpanan Data'=>array('index'),
	'Tambah',
);


?>

<section id="content">
	<div class="panel">
		<div class="panel panel-dark">
			<div class="panel-heading bg-dark"><span class="fa fa-hdd-o fa-lg mr10"></span>Simpan Data</div>

			<div class="panel-body">
				<?php $this->renderPartial('_form', array('model'=>$model,'arraytable'=>$arraytable)); ?>
			</div>
			
		</div>
	</div>
</section>


