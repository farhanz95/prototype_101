<?php $this->breadcrumbs=array('Laporan') ?>

<style>

.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  border: 1px solid #bbb !important;
  text-align: center;
}


</style>

<section id="content">
	<div class="panel">
		<div class="panel panel-dark">
			<div class="panel panel-heading">
				<span class="glyphicon glyphicon-stats mr10"></span>Laporan
			</div>

			<div class="panel-body">

			<?php $this->renderPartial('laporan1'); ?>

			</div>
		</span>
	</div>
</section>