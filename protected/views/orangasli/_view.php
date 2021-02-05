<?php
/* @var $this OrangasliController */
/* @var $data Orangasli */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('orangasli_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->orangasli_id), array('view', 'id'=>$data->orangasli_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ic')); ?>:</b>
	<?php echo CHtml::encode($data->ic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namakeluarga')); ?>:</b>
	<?php echo CHtml::encode($data->namakeluarga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dob')); ?>:</b>
	<?php echo CHtml::encode($data->dob); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keturunan')); ?>:</b>
	<?php echo CHtml::encode($data->keturunan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agama')); ?>:</b>
	<?php echo CHtml::encode($data->agama); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('jantina')); ?>:</b>
	<?php echo CHtml::encode($data->jantina); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('poskod')); ?>:</b>
	<?php echo CHtml::encode($data->poskod); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('catatan')); ?>:</b>
	<?php echo CHtml::encode($data->catatan); ?>
	<br />

	*/ ?>

</div>