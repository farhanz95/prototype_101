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
                    <div class="alert alert-sm alert-border-left alert-primary light alert-dismissable">
<a class="glyphicon glyphicon-exclamation-sign mr10"></a> PROSES PENUKARAN KATA LALUAN </br></br>
<span class="fa fa-exclamation-sign"></span>Sila masukkan kata laluan yang baru, bagi tujuan keselamatan kata laluan mestilah mempunyai gabungan nombor dan digit serta melebihi 8 karakter
                    </div>
                </div>
            </div>

            <div class="col-sm-12 pr30">
                <div class="section">
                    <label for="firstname" class="field prepend-icon">
                        <?php echo $form->textField($user,'login',array('class' => 'gui-input','placeholder' => 'Kata Laluan Baru'));?>
                        <label for="firstname" class="field-icon"><i class="fa fa-unlock-alt"></i>
                        </label>
                    </label>
                      <?php echo $form->error($user,'login'); ?>
                </div>
            </div>
            <div class="col-sm-12 pr30">
                <div class="section">
                    <label for="firstname" class="field prepend-icon">
                        <?php echo $form->textField($user,'login',array('class' => 'gui-input','placeholder' => 'Ulang Kata Laluan Baru'));?>
                        <label for="firstname" class="field-icon"><i class="fa fa-unlock-alt"></i>
                        </label>
                    </label>
                      <?php echo $form->error($user,'login'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-footer clearfix">
 
<?php echo CHtml::link('<i class="fa fa-lock mr10"></i>Reset Kata Laluan', array('/site/login'), array('class'=>'btn btn-primary br24 mr10 pull-right'));?>

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