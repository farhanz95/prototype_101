<?php
/* @var $this DefaultController */
/* @var $model User */

$this->breadcrumbs=array(
	'Senarai Jawatan'=>array('/roles'),
	'Daftar',
);

?>

<section id="content" class="animated fadeIn">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
            <div class="panel panel-dark">
                <div class="panel-heading bg-dark">
                	<span class="panel-title">Daftar Jawatan Baru</span>
                </div>
                <div class="panel-body">
                	<?php $this->renderPartial('_form', array('authitem'=>$authitem)); ?>
                </div>
			</div>
		</div>
	</div>
</section>