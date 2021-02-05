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
                    <div class="alert alert-sm alert-border-left alert-primary light alert-dismissable fswn">
<a class="glyphicon glyphicon-exclamation-sign mr10"></a>  PENDAFTARAN BERJAYA </br></br>
<span class="fa fa-exclamation-sign"></span>Anda sudah berjaya didaftarkan ke dalam sistem <b>SPMOA</b><!--  </br>Account anda akan diaktifkan sepenuhnya hanya selepas anda menekan link yang dihantar ke Email anda  -->
                    </div>
                </div>
            </div>
            

        </div>
    </div>
    <div class="panel-footer clearfix">
 
<?php echo CHtml::link('<i class="fa fa-arrow-right mr10"></i>Log Masuk', array('/site/login'), array('class'=>'btn btn-primary br24 mr10 pull-right'));?>
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