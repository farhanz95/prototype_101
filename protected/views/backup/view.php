<?php
/* @var $this BackupController */
/* @var $model Backup */

$this->breadcrumbs=array(
	'Penyimpanan Data'=>array('index'),
	$model->name,
);

?>

<section id="content">
	<div class="panel">
		<div class="panel panel-dark">
			<div class="panel-heading bg-dark">
				<span class="text-white"><span class="fa fa-search mr10"></span>Maklumat Data Penyimpanan</span>
			</div>

			<div class="panel-body">				

				<table class="table table-bordered table-responsive table-striped">
						<tr>
							<td width="25%" class="bold"><span class="fa fa-hdd-o fa-lg mr10"></span> Nama Data</td>
							<td><span class="fa fa-hdd-o fa-lg mr10"></span><?php echo $model['name'] ?></td>
						</tr>
						<tr>
							<td class="bold"><span class="fa fa-hdd-o fa-lg mr10"></span> Keterangan Data</td>
							<td><span class="fa fa-hdd-o fa-lg mr10"></span> <?php echo $model['description'] ?></td>
						</tr>
						<tr>
							<td class="bold"><span class="fa fa-hdd-o fa-lg mr10"></span> Tarikh Backup</td>
							<td><span class="fa fa-hdd-o fa-lg mr10"></span> <?php echo $model['date'] ?></td>
						</tr>
						<tr>
							<td class="bold"><span class="fa fa-hdd-o fa-lg mr10"></span> IP Penyimpan</td>
							<td><span class="fa fa-hdd-o fa-lg mr10"></span> <?php echo $model['ip'] ?></td>
						</tr>
						<tr>
							<td class="bold"><span class="fa fa-hdd-o fa-lg mr10"></span> Browser Penyimpan</td>
							<td><span class="fa fa-hdd-o fa-lg mr10"></span> <?php echo $model['browser'] ?></td>
						</tr>
				</table>
			</div>
			
		</div>
	</div>
</section>

