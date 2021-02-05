<div id="task-list">
	<?php if($authitem->getUnassignedTasks()): ?>
	<label class="col-lg-2 control-label">Tugasan Belum Dipilih</label>
	<div class="col-lg-10 checkbox-custom">
		<?php echo CHtml::activeCheckBoxList($itemchildren,'child', SHtml::listData($authitem->getUnassignedTasks(), 'name', 'name')); ?>
		<br/>
	</div>
	<label class="col-lg-2 control-label"></label>
	<div class="col-lg-10 ">
		<input class="assign btn btn-default mb20" type="button" onClick="assign('<?php echo Yii::app()->controller->createUrl("/roles/default/assignTask", array("id"=>$authitem->name)); ?>','<?php echo Yii::app()->controller->createUrl("/roles/default/reloadTask", array("id"=>$authitem->name)); ?>')" value="Tambah"/>
	</div>
	<?php else: ?>
	<label class="col-lg-12 control-label">Semua tugasan telah dipilih</label>
	<?php endif; ?>
</div>
