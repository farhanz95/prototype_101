<?php
/* @var $this KadbancianController */
/* @var $model Kadbancian */

$this->breadcrumbs=array(
	'Kad Bancian'=>array('index'),
	'Kemaskini',
);

 
?>

<section id="content">
	<div class="panel">
		<div class="panel panel-dark">
			<div class="panel-heading">
				<span class="fa fa-credit-card mr10"></span>Kemaskini Kad Bancian
			</div>

			<div class="panel-body">

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

			</div>
		</div>
	</div>
</section>

