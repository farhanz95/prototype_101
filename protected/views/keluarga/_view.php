<?php
/* @var $this KeluargaController */
/* @var $data Keluarga */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('keluarga_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->keluarga_id), array('view', 'id'=>$data->keluarga_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('catatan')); ?>:</b>
	<?php echo CHtml::encode($data->catatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orangasli_id')); ?>:</b>
	<?php echo CHtml::encode($data->orangasli_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_kir')); ?>:</b>
	<?php echo CHtml::encode($data->nama_kir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kp_baru')); ?>:</b>
	<?php echo CHtml::encode($data->kp_baru); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kp_lama')); ?>:</b>
	<?php echo CHtml::encode($data->kp_lama); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('warna_kp')); ?>:</b>
	<?php echo CHtml::encode($data->warna_kp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat_kir')); ?>:</b>
	<?php echo CHtml::encode($data->alamat_kir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('poskod')); ?>:</b>
	<?php echo CHtml::encode($data->poskod); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('negeri')); ?>:</b>
	<?php echo CHtml::encode($data->negeri); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('daerah')); ?>:</b>
	<?php echo CHtml::encode($data->daerah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mukim')); ?>:</b>
	<?php echo CHtml::encode($data->mukim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kampung')); ?>:</b>
	<?php echo CHtml::encode($data->kampung); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_perjawatan')); ?>:</b>
	<?php echo CHtml::encode($data->status_perjawatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kampung_jkkk')); ?>:</b>
	<?php echo CHtml::encode($data->kampung_jkkk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_ahli')); ?>:</b>
	<?php echo CHtml::encode($data->status_ahli); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parlimen')); ?>:</b>
	<?php echo CHtml::encode($data->parlimen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dun')); ?>:</b>
	<?php echo CHtml::encode($data->dun); ?>
	<br />

	*/ ?>

</div>