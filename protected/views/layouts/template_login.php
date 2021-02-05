<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>

<style>

body.external-page #content .admin-form {
  position: relative !important;
  width: 100% !important;
  max-width: 800px !important;
  margin: 0 auto !important;
  margin-top: 0% !important;
}

.admin-form .panel-spmoa > .panel-heading {
  border-top-color: #F70049;
}

.admin-form .panel-spmoa.heading-border:before,
.admin-form .panel-spmoa .heading-border:before {
  background-color: #F70049;
}

</style>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="keywords" content="Basic Template" />
    <meta name="description" content="Basic Template">
    <meta name="author" content="Basic Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">

    <!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/skin/default_skin/css/theme.css">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin-tools/admin-forms/css/admin-forms.css">

    <!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/utility/colorbox/example3/colorbox.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
   <![endif]-->


    <!-- jQuery -->
    <?php
        Yii::app()->getClientScript()->registerCoreScript( 'jquery.ui' );
        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/utility/canvasbg/canvasbg.js', CClientScript::POS_END);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/bootstrap/bootstrap.min.js', CClientScript::POS_END);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/utility/utility.js', CClientScript::POS_END);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/main.js', CClientScript::POS_END);

        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl."/js/pages/login/EasePack.min.js", CClientScript::POS_END);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl."/js/pages/login/rAF.js", CClientScript::POS_END);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl."/js/pages/login/TweenLite.min.js", CClientScript::POS_END);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl."/js/pages/login/login.js", CClientScript::POS_END);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl."/js/utility/colorbox/jquery.colorbox.js", CClientScript::POS_END);
    ?>
</head>

<body class="external-page sb-l-c sb-r-c">

    <!-- Start: Main -->
    <div id="main" class="animated fadeIn">

        <!-- Start: Content-Wrapper -->
        <section id="content_wrapper">
            <div id="canvas-wrapper">
                <canvas id="demo-canvas"></canvas>
            </div>

            <!-- Begin: Content -->
            <section id="content">

                <div class="admin-form theme-info" id="login1" >

                    <div class="row mb15 table-layout text-center">
                        <div class="col-xs-2"></div>
                        <div class="col-xs-10 va-m">
                            <a href="<?php echo Yii::app()->controller->createUrl("/site/login") ?>" title="Return to Dashboard">
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/img/logos/logo_spmoa_login.png" title="Basic Template Logo" class="img-responsive wauto">
                            </a>
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/img/patterns/1_system_name.png" title="Basic Template Logo" class="img-responsive wauto">
                        </div>
                       
                    </div>
 

                    <div class="panel panel-spmoa mt10 br-n">
                        <div class="panel-heading heading-border bg-white">
                            <span class="panel-title hidden"><i class="fa fa-sign-in"></i></span>
                        </div>

                        <?php echo $content; ?>
                    </div>

                     <div class="login-links text-center">

    <img src="<?php echo Yii::app()->request->baseUrl ?>/css/img/patterns/logo-jakoa.png">

    <br></br>
    <p><font size ="2" class="text-dark">Hak Cipta Terpelihara © 2016</font></p>
    <p><font size ="2" class="text-dark">Pihak Jabatan Kementerian Orang Asli (JAKOA)</font></p>
    <p><font size ="2" class="text-dark">Sistem Pengurusan Maklumat Orang Asli (SPMOA)</font></p>
    <p><font size ="2" class="text-dark">Paparan Optimum menggunakan pelayar</font></p>
        <img src="http://findicons.com/files/icons/1070/software/128/mozilla_firefox.png" alt="mozilla,firefox,browser" style="width: 25px; height: 25px; margin-left: 0px; margin-right: 0px; margin-top: 0px;">

        <img style="-webkit-user-select: none" src="http://icons.iconarchive.com/icons/google/chrome/24/Google-Chrome-icon.png">

        <img crossorigin="anonymous" src="https://upload.wikimedia.org/wikipedia/en/1/10/Internet_Explorer_7_Logo.png" class="mw-mmv-final-image mw-mmv-dialog-is-open" alt="undefined" style="width: 25px; height: 25px; margin-left: 0px; margin-right: 0px; margin-top: 0px;">

        <img src="http://icons.iconarchive.com/icons/photoshopedia/xedia/256/Safari-icon.png" class="mw-mmv-final-image mw-mmv-dialog-is-open" alt="undefined" style="width: 25px; height: 25px; margin-left: 0px; margin-right: 0px; margin-top: 0px;">

        

        <p><font size ="2" class="text-dark"> dengan resolusi 1024 X 786 pixel</font></p>
  </div>
                </div>

            </section>
            <!-- End: Content -->

        </section>
        <!-- End: Content-Wrapper -->

    </div>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->


    <?php
    Yii::app()->clientScript->registerScript(
            'template_login', 
            '
            Core.init({
                sbm: \'sb-l-c\',
            });

            // Init CanvasBG and pass target starting location
            CanvasBG.init({
                Loc: {
                    x: window.innerWidth / 2,
                    y: window.innerHeight / 3.3
                },
            });

            $.fn.open = function(page, event){
                event.preventDefault();
                $.colorbox({
                    iframe: true,
                    href: "'.Yii::app()->request->baseUrl.'/index.php/site/"+page,
                    width: "65%",
                    height: "100%",
                    fixed: true,
                    scrolling: true,
                });
            }

            $.fn.openac = function(page, event){
                event.preventDefault();
                $.colorbox({
                    iframe: true,
                    href: "'.Yii::app()->request->baseUrl.'/index.php/site/"+page,
                    width: "60ss%",
                    height: "100%",
                    fixed: true,
                    scrolling: false,
                });
            }',
            CClientScript::POS_READY
        );
    ?>

    <!-- END: PAGE SCRIPTS -->

</body>

</html>
