<?php
/* @var $this KeluargaController */
/* @var $model Keluarga */

$this->breadcrumbs=array(
	'Keluargas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Keluarga', 'url'=>array('index')),
	array('label'=>'Manage Keluarga', 'url'=>array('admin')),
);
?>

<h1>Create Keluarga</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>