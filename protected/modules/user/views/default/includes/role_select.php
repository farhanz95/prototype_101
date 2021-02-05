<div id="role_list">
	<label class="col-lg-2 control-label">Jawatan Belum Dilantik</label>
	<div class="col-lg-4">
		<?php echo CHtml::activeDropDownList($user,'role', SHtml::listData($user->getUnassignedRoles(), 'name', 'name'), array('size'=>5, 'class'=>'dropdown form-control')); ?>
		<br/>
		<?php if($update): ?>
		<input class="assign btn btn-default" type="button" onClick="assign('<?php echo Yii::app()->controller->createUrl("/user/default/assignRole", array("id"=>$user->id)); ?>','<?php echo Yii::app()->controller->createUrl("/user/default/reloadRoles", array("id"=>$user->id)); ?>')" value="Tambah"/>
		<?php endif; ?>
	</div>
</div>