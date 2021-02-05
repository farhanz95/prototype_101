<?php
/* @var $this FacultyController */
/* @var $model Faculty */

$this->breadcrumbs=array(
	'Faculties'=>array('index'),
	'Create',
);

 
?>

<section id="content">
	<div class="panel">
		<div class="panel panel-dark">
			<div class="panel-heading">
				<span class="fa fa-building mr10"></span>Register New Faculty
			</div>

			<div class="panel-body">

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

			</div>
		</div>
	</div>
</section>
