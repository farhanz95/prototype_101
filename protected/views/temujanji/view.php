<?php
/* @var $this TemujanjiController */
/* @var $model Temujanji */

$this->breadcrumbs=array(
	'Temujanjis'=>array('index'),
	$model->temujanji_id,
);

$this->menu=array(
	array('label'=>'List Temujanji', 'url'=>array('index')),
	array('label'=>'Create Temujanji', 'url'=>array('create')),
	array('label'=>'Update Temujanji', 'url'=>array('update', 'id'=>$model->temujanji_id)),
	array('label'=>'Delete Temujanji', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->temujanji_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Temujanji', 'url'=>array('admin')),
);
?>

<h1>View Temujanji #<?php echo $model->temujanji_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'temujanji_id',
		'orangasli_id',
		'nama',
		'alamat',
		'negeri',
		'daerah',
		'postcode',
		'tarikh',
		'masa',
		'tempat',
		'penemuduga',
	),
)); ?>
