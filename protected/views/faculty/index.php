<?php
/* @var $this FacultyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Faculties',
);

 
?>

<section id="content">
	<div class="panel">
		<div class="panel panel-dark">
			<div class="panel-heading">
				<span class="fa fa-building mr10"></span> Faculty List
			</div>

			<div class="panel-body">

<?php echo CHtml::link('Register New Faculty', array('/faculty/create') ,array('class'=>'btn btn-system')); ?>

			</div>

		</div>
	</div>
</section>