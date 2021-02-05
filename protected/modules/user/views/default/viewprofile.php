<?php
/* @var $this DefaultController */
/* @var $model User */

$this->breadcrumbs=array(
	$model->login,
);

?>

<section id="content" class="animated fadeIn">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
            <div class="panel panel-dark">
                <div class="panel-heading bg-dark">
                	<span class="panel-title">Lihat Profil - <?php echo $model->login; ?></span>
                </div>
                <div class="panel-body">
                	<div class="form-group">
                		<?php echo CHtml::link('<i class="fa fa-pencil mr10"></i>Kemaskini Profil',array('/user/default/editprofile'),array('class'=>'search-button btn btn-primary')); ?>
                	</div>

                    <table class="table table-bordered table-responsive">
                    <tr style="background-color:#4A89DC ; color:white">
                    	<td>ID Pengguna</td>
                    	<td>Email</td>
                    	<td>Phone</td>
                    	<td>Status</td>
                    </tr>
                    <tr>
                    	<td><?php echo $model->login ?></td>
                    	<td><?php echo $model->email ?></td>
                    	<td><?php echo $model->phone ?></td>
                    	<td><?php 
                    			if($model->status->id == 1) 
                    			{ 
                    				echo "<span class='label label-success'>" .$model->status->name. "</span>";
                    			}
                    			else 
                    			{
                    			 	echo "<span class='label label-alert'>" .$model->status->name. "</span>";
                    			} 
                    		?>
                    	</td>
                    </tr>
                    </table>

				</div>
			</div>
		</div>
	</div>
</section>