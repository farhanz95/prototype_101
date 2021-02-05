<?php

$this->breadcrumbs=array(
	'Orang Asli'=>array('index'),
	'Pendaftaran Keluarga',
);

?>

<section id="content">
	<div class="panel">
		<div class="panel panel-dark">
			<div class="panel-heading">
				<i class="fa fa-user-plus mr10"></i> Pendaftaran Keluarga Orang Asli
			</div>

			<div class="panel-body">

			<?php $this->renderPartial('_formKeluarga', array('model'=>$model)); ?>

			</div>
		</div>
	</div>
</section>