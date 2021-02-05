<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>

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
        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/bootstrap/bootstrap.min.js', CClientScript::POS_END);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/utility/utility.js', CClientScript::POS_END);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/main.js', CClientScript::POS_END);
    ?>
</head>

<body>

    <!-- Start: Main -->
    <div id="main">

        <!-- Start: Content-Wrapper -->
        <section id="">

            <!-- Begin: Content -->
            <?php echo $content; ?>
            <!-- End: Content -->

        </section>
        <!-- End: Content-Wrapper -->

    </div>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->

    <?php
    Yii::app()->clientScript->registerScript(
            'template_cert', 
            '
            Core.init({
                sbm: \'sb-l-c\',
            });',
            CClientScript::POS_READY
        );
    ?>

    <!-- END: PAGE SCRIPTS -->

</body>

</html>