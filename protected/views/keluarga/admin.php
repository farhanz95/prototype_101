<?php
/* @var $this KeluargaController */
/* @var $model Keluarga */

$this->breadcrumbs=array(
	'Keluargas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Keluarga', 'url'=>array('index')),
	array('label'=>'Create Keluarga', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#keluarga-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Keluargas</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'keluarga-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'keluarga_id',
		'nama',
		'catatan',
		'orangasli_id',
		'nama_kir',
		'kp_baru',
		/*
		'kp_lama',
		'warna_kp',
		'alamat_kir',
		'poskod',
		'negeri',
		'daerah',
		'mukim',
		'kampung',
		'status_perjawatan',
		'kampung_jkkk',
		'status_ahli',
		'parlimen',
		'dun',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
