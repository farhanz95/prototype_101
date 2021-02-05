<?php
/* @var $this KadbancianController */
/* @var $model Kadbancian */

$this->breadcrumbs=array(
	'Kad Bancian'=>array('index'),
	'Keluarkan Kad Bancian',
);

?>

<section id="content">
	<div class="panel">
		<div class="panel panel-dark">
			<div class="panel-heading">
				<span class="fa fa-plus mr10"></span>Pengeluaran Kad Bancian Baru
			</div>

			<div class="panel-body">

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

			</div>
		</div>
	</div>
</section>