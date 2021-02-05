<?php
/* @var $this KeluargaController */
/* @var $model Keluarga */

$this->breadcrumbs=array(
	'Keluargas'=>array('index'),
	$model->keluarga_id=>array('view','id'=>$model->keluarga_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Keluarga', 'url'=>array('index')),
	array('label'=>'Create Keluarga', 'url'=>array('create')),
	array('label'=>'View Keluarga', 'url'=>array('view', 'id'=>$model->keluarga_id)),
	array('label'=>'Manage Keluarga', 'url'=>array('admin')),
);
?>

<h1>Update Keluarga <?php echo $model->keluarga_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>