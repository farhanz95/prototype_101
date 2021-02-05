<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
// $this->breadcrumbs=array(
//  'Login',
// );
?>

<style>

.admin-form .switch > label {
  cursor: pointer;
  display: inline-block;
  position: relative;
  height: 25px;
  width: 62px !important;
  color: #fff;
  font-size: 10px;
  font-weight: bold;
  line-height: 20px;
  text-align: center;
  background: #D7D7D7;
  border: 2px solid #D7D7D7;
  text-transform: uppercase;
  font-family: Helvetica, Arial, sans-serif;
  -webkit-transition: 0.3s ease-out;
  -moz-transition: 0.3s ease-out;
  -o-transition: 0.3s ease-out;
  transition: 0.3s ease-out;
}

</style>

<!-- end .form-header section -->
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'login-form',
    'enableClientValidation'=>true,
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
    ),
)); ?>

    <div class="panel-body bg-light p30">
        <div class="row">
            <div class="col-sm-7 pr30">
                <div class="section">
                    <?php echo $form->labelEx($model,'username', array('class'=>'field-label text-muted fs18 mb10')); ?>
                    <label for="username" class="field prepend-icon">
                        <?php echo $form->textField($model,'username', array('class'=>'gui-input', 'placeholder'=>'Masukkan ID Pengguna')); ?>
                        <label for="username" class="field-icon"><i class="fa fa-user"></i>
                        </label>
                    </label>
                    <?php echo $form->error($model,'username'); ?>
                </div>
                <!-- end section -->

                <div class="section">
                    <?php echo $form->labelEx($model,'password', array('class'=>'field-label text-muted fs18 mb10')); ?>
                    <label for="password" class="field prepend-icon">
                        <?php echo $form->passwordField($model,'password', array('class'=>'gui-input', 'placeholder'=>'Masukkan Kata Laluan')); ?>
                        <label for="password" class="field-icon"><i class="fa fa-lock"></i>
                        </label>
                    </label>
                    <?php echo $form->error($model,'password'); ?>
                </div>
                <!-- end section -->
            </div>
            <div class="col-sm-5 br-l br-grey pl30">
                <h3 class="mb25"> Pautan:</h3>
                <div class="col-md-12">
                    <a class="pull-left" href="#" onclick="$(this).open('faq', event);"> <img class="mw30 mr10 mb5" src="<?php echo Yii::app()->request->baseUrl; ?>/images/icons/3.png" alt="..."> Manual Penggunaan Sistem</a>
                </div>
                <div class="col-md-12 mt20">
                <span class="fa fa-user-plus text-primary fs20 ml5 mr10"></span>
                     <a href="<?php echo Yii::app()->controller->createUrl("/site/register") ?>" class="active" title="Daftar">Pendaftaran Baru</a>        
                </div>
                <div class="col-md-12 mt20">
                <span class="fa fa-question text-primary fs20 ml5 mr20"></span>
                     <a href="<?php echo Yii::app()->controller->createUrl("/site/forgotpassword") ?>" class="active" title="Tukar Kata Laluan">Lupa Kata Laluan</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end .form-body section -->

    <div class="panel-footer clearfix p10 ph10">
<?php echo CHtml::tag('button', array('class' => 'btn btn-info br24 mr10 pull-right'), '<i class="fa fa-arrow-right mr10"></i>Log Masuk');?>
        <label class="switch block switch-primary pull-left input-align mt10 ml15">
            <!-- <input type="checkbox" name="remember" id="remember" checked> -->
            <?php echo $form->checkBox($model,'rememberMe'); ?>
            <?php // echo $form->label($model,'rememberMe', array('data-on'=>'YES', 'data-off'=>'NO')); ?>
            <label for="LoginForm_rememberMe" data-on="YA" data-off="TIDAK"></label>
            <span class="fs12 text-primary">Kekalkan saya log masuk ke dalam sistem</span>
            <?php echo $form->error($model,'rememberMe'); ?>
        </label>
    </div>
    <!-- end .form-footer section -->

    
<?php $this->endWidget(); ?>