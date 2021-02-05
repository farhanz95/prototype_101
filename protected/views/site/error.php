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

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin-tools/admin-forms/css/admin-forms.css">

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

<body class="external-page sb-l-c sb-r-c">

    <!-- Start: Main -->
    <div id="main" class="animated fadeIn">

        <!-- Start: Content-Wrapper -->
        <section id="content_wrapper">

            <!-- Begin: Content -->
            <section id="content">

                <div class="admin-form theme-info" id="login1" style="max-width:400px">

                    <div class="row mb15 table-layout">

                        <div class="col-xs-6 va-m pln">
                            <a href="<?php echo Yii::app()->controller->createUrl("/dashboard/default/index") ?>" title="Return to Dashboard">
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/img/logos/logo_white.png" title="Basic Template Logo" class="img-responsive w250">
                            </a>
                        </div>

                        <div class="col-xs-6 text-right va-b pr5">
                            <div class="login-links">
                                <!-- <a href="pages_login.html" class="active" title="Sign In">Login</a>
                                <span class="text-white"> | </span>
                                <a href="pages_register.html" class="" title="Register">Register</a> -->
                            </div>

                        </div>

                    </div>

                    <div class="panel mt10 br-n">
						<div class="panel-body p10">
						    <div class="row">
						        <div class="col-sm-12">
										<h2><span class="required">Sorry, Bad Page! :(</span></h2>
										<div class="alert alert-success pastel">
											<span class="required">" Seems we can't find the page you request in our server. Please go to <a onclick="parent.history.back();
        return false;">previous</a> page or <a href="<?php echo Yii::app()->controller->createUrl('/dashboard'); ?>">homepage</a> "</span>
										</div>
						        </div>
						    </div>
						</div>
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
            });',
            CClientScript::POS_READY
        );
    ?>

    <!-- END: PAGE SCRIPTS -->

</body>

</html>