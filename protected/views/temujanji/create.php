<?php
/* @var $this TemujanjiController */
/* @var $model Temujanji */

$this->breadcrumbs=array(
	'Senarai Temujanji'=>array('index'),
	'Temujanji Baru',
);

?>

<section id="content">
	<div class="panel">
		<div class="panel panel-dark">
			<div class="panel-heading">
				<i class="fa fa-user-plus mr10"></i> Temujanji Baru
			</div>

			<div class="panel-body">

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

			</div>
		</div>
	</div>
</section>