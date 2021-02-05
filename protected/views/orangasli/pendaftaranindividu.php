<?php

$this->breadcrumbs=array(
	'Orang Asli'=>array('index'),
	'Pendaftaran Orang Asli'=> Yii::app()->request->baseurl . '/index.php/orangasli/create',
	'Pendaftaran Individu',
);

?>

<section id="content">
	<div class="panel">
		<div class="panel panel-dark">
			<div class="panel-heading">
				<i class="fa fa-user-plus mr10"></i> Pendaftaran Individu Orang Asli
			</div>

			<div class="panel-body">

			<?php $this->renderPartial('_formIndividu', array('model'=>$model)); ?>

			</div>
		</div>
	</div>
</section>