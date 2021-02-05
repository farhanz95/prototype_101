<?php
/* @var $this TemujanjiController */
/* @var $data Temujanji */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('temujanji_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->temujanji_id), array('view', 'id'=>$data->temujanji_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orangasli_id')); ?>:</b>
	<?php echo CHtml::encode($data->orangasli_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('negeri')); ?>:</b>
	<?php echo CHtml::encode($data->negeri); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('daerah')); ?>:</b>
	<?php echo CHtml::encode($data->daerah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postcode')); ?>:</b>
	<?php echo CHtml::encode($data->postcode); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tarikh')); ?>:</b>
	<?php echo CHtml::encode($data->tarikh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('masa')); ?>:</b>
	<?php echo CHtml::encode($data->masa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tempat')); ?>:</b>
	<?php echo CHtml::encode($data->tempat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('penemuduga')); ?>:</b>
	<?php echo CHtml::encode($data->penemuduga); ?>
	<br />

	*/ ?>

</div>