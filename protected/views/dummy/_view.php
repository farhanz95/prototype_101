<?php
/* @var $this DummyController */
/* @var $data Dummy */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value1')); ?>:</b>
	<?php echo CHtml::encode($data->value1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value2')); ?>:</b>
	<?php echo CHtml::encode($data->value2); ?>
	<br />


</div>