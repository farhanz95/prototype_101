<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'register-form',
    'enableClientValidation'=>true,
    'enableAjaxValidation'=>true,
    'clientOptions' => array('validateOnSubmit'=>true),
)); ?>

    <div class="panel-body bg-light p30">
        <div class="row">
            <div class="col-sm-12 pr30">
                <div class="section">
                    <label for="firstname" class="field prepend-icon">
                        <?php echo $form->textField($user,'login',array('class' => 'gui-input','placeholder' => 'Nama Penuh Pengguna'));?>
                        <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                        </label>
                    </label>
                      <?php echo $form->error($user,'login'); ?>
                </div>
            </div>
            <div class="col-sm-6 pr15">
                <div class="section">
                    <label for="firstname" class="field prepend-icon">
                        <?php echo $form->textField($user,'login',array('class' => 'gui-input','placeholder' => 'ID Log Masuk'));?>
                        <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                        </label>
                    </label>
                      <?php echo $form->error($user,'login'); ?>
                </div>
            </div>
            <div class="col-sm-6 pr30">
                <div class="section">
                    <label for="email" class="field prepend-icon">
                         <?php echo $form->textField($user,'login',array('class' => 'gui-input','placeholder' => 'Emel Pengguna', 'onblur'=>'$(this).changeusername()')); ?>
                        <label for="email" class="field-icon"><i class="fa fa-envelope"></i>
                        </label>
                    </label>
                    <?php echo $form->error($user,'login'); ?>
                </div>
            </div>
            <div class="col-sm-6 pr15">
                <div class="form-group">
                    <label for="firstname" class="field prepend-icon">
                    <?php echo $form->textField($user,'login',array('class' => 'gui-input','placeholder' => 'Kata Laluan'));?>
                        <label for="comment" class="field-icon"><i class="fa fa-unlock-alt"></i>
                        </label>
                    </label>
                     
                </div>
            </div>
            <div class="col-sm-6 pr30">
                <div class="section">
                    <label for="postcode" class="field prepend-icon">
                   <?php echo $form->textField($user,'login',array('class' => 'gui-input','placeholder' => 'Ulang Kata Laluan'));?>
                        <label for="postcode" class="field-icon"><i class="fa fa-lock"></i>
                        </label>
                    </label>
                    
                </div>
            </div>           

            <div class="col-sm-12 pr30">
            
                 <div class="section mb15">
                    <label class="option block mt15">
                       <input type="checkbox" id="Company_rules_relegations" >
                        <span class="checkbox"></span>
                        Saya setuju dengan <a>terma dan syarat</a> pendaftaran pengguna SPMOA
                    </label>
                    <?php echo $form->error($user,'login'); ?>
                </div>
       
            </div>

        </div>
    </div>
    <div class="panel-footer clearfix">
 
<?php echo CHtml::link('<i class="fa fa-user-plus mr10"></i>Daftar Pengguna', array('/site/registersuccess'), array('class'=>'btn btn-primary br24 mr10 pull-right'));?>

<?php echo CHtml::link('<i class="fa fa-arrow-left mr10"></i>Kembali', array('/site/login'), array('class'=>'btn btn-info br24 mr10 pull-left'));?>
    </div>
<?php $this->endWidget(); ?>
<?php
Yii::app()->clientScript->registerScript(
    'register-jquery', 

    "
    $('#create_account').on('click', function(e){
        if(!$('#Company_rules_relegations').is(':checked')){
            alert('Please agree with the rules & relegations before submit');
            e.preventDefault();
        }
    });

    $.fn.changeusername = function(){
        $('#User_login').val($('#Company_email').val());
    }

    $.fn.open= function(page, event){
        event.preventDefault();
        $.colorbox({
            iframe: true,
            href: '".Yii::app()->request->baseUrl."/index.php/site/'+page,
            width: \"60%\",
            height: \"90%\",
            fixed: true,
            scrolling: false,
        });
    }
    ",
    CClientScript::POS_READY
);
?>