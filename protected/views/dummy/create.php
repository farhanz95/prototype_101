<?php
/* @var $this TemujanjiController */
/* @var $model Temujanji */

$this->breadcrumbs=array(
	'Senarai Dummy Data'=>array('index'),
	'Dummy Data Baru',
);

?>

<section id="content">
	<div class="panel">
		<div class="panel panel-dark">
			<div class="panel-heading">
				<i class="glyphicon glyphicon-hdd mr10"></i> Dummy Data Baru
			</div>

			<div class="panel-body">

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

			</div>
		</div>
	</div>
</section>