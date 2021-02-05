<?php
/* @var $this KadbancianController */
/* @var $data Kadbancian */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kadbancian_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kadbancian_id), array('view', 'id'=>$data->kadbancian_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keluarga_id')); ?>:</b>
	<?php echo CHtml::encode($data->keluarga_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statuscetakan')); ?>:</b>
	<?php echo CHtml::encode($data->statuscetakan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('catatan')); ?>:</b>
	<?php echo CHtml::encode($data->catatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('negeri')); ?>:</b>
	<?php echo CHtml::encode($data->negeri); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('daerah')); ?>:</b>
	<?php echo CHtml::encode($data->daerah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kampung')); ?>:</b>
	<?php echo CHtml::encode($data->kampung); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('no_rumah')); ?>:</b>
	<?php echo CHtml::encode($data->no_rumah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tarikh')); ?>:</b>
	<?php echo CHtml::encode($data->tarikh); ?>
	<br />

	*/ ?>

</div>