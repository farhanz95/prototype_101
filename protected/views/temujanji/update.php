<?php
/* @var $this TemujanjiController */
/* @var $model Temujanji */

$this->breadcrumbs=array(
	'Temujanjis'=>array('index'),
	$model->temujanji_id=>array('view','id'=>$model->temujanji_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Temujanji', 'url'=>array('index')),
	array('label'=>'Create Temujanji', 'url'=>array('create')),
	array('label'=>'View Temujanji', 'url'=>array('view', 'id'=>$model->temujanji_id)),
	array('label'=>'Manage Temujanji', 'url'=>array('admin')),
);
?>

<h1>Update Temujanji <?php echo $model->temujanji_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>