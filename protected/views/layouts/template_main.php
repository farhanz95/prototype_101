<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>

<?php 
    
    $ftu_page = Yii::app()->request->requestUri;

    //$ftu_page == "/jakoa/index.php/dashboard/default/index")

?>

<head>
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<?php
Yii::app()->clientScript->registerMetaTag(null,null,null,array('charset'=>'utf-8'));
Yii::app()->clientScript->registerMetaTag('Basic Template',null,null,array('name'=>'keywords'));
Yii::app()->clientScript->registerMetaTag('Basic Template',null,null,array('name'=>'description'));
Yii::app()->clientScript->registerMetaTag('Basic Template',null,null,array('name'=>'author'));
Yii::app()->clientScript->registerMetaTag('width=device-width, initial-scale=1.0',null,null,array('name'=>'viewport'));
?>

<!-- Favicon -->
<!-- <link rel="shortcut icon" href="assets/img/favicon.ico"> -->

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<!-- CSS files-->
<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/skin/default_skin/css/theme.css');
Yii::app()->clientScript->registerCssFile('http://fonts.googleapis.com/css?family=Open+Sans:400,600,700');
Yii::app()->clientScript->registerCssFile('http://fonts.googleapis.com/css?family=Roboto:300,400,500,700');
?>


<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/skin/default_skin/css/core.css">

     <style>

        .table-bordered table.table th {background:#4A89DC ;color:white;border-left:1px solid #fff;}
        .table-bordered table.table th a {color:white;text-decoration:none;}
        .table-bordered table.table tr.filters input{display: block;
        width: 100%;
        height: 39px;
        padding: 9px 12px;
        font-size: 13px;
        line-height: 1.5;
        color: #555555;
        background-color: #ffffff;
        background-image: none;
        border: 1px solid #dddddd;
        border-radius: 0px;
        -webkit-transition: border-color ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s;
        transition: border-color ease-in-out .15s;
        }

        .navbar.navbar-fixed-top + #sidebar_left + #content_wrapper {
         padding-top: 0px !important; 
        }

        /*.tour-step-backdrop {
            position: relative;
            z-index: 1101 !important;
            background: #aaa !important;
        }*/

    </style>

 
<!-- Change Yii::app()->user->isGuest() 
    at C:\wamp\www\jalin\yii\framework\web\auth\CWebUser.php:
    74 : public $guestName='Public'; 
    -->

</head>

<body>

    <!-- Start: Main -->
    <div id="main">

        <!-- Start: Header -->
         <header class="navbar navbar-fixed-top bg-background
        <?php 
        if (Yii::app()->user->checkAccess('Administrator'))
         {echo 'bg-topbar-admin bg-danger';}
        else if (Yii::app()->user->checkAccess('PegawaiDaerah') || Yii::app()->user->checkAccess('PegawaiPejabat'))
         {echo 'bg-topbar-pegawai bg-success';}
        else if (Yii::app()->user->checkAccess('PegawaiNegeri'))
         {echo 'bg-topbar-penggunaluar bg-warning';}
        else if (Yii::app()->user->isGuest)
         {echo 'bg-topbar-penggunaluar bg-warning';}
        ?>
        ">
            <div class="navbar-branding" style="background-color:#30363e !important">
                <a class="navbar-brand" href="<?php echo Yii::app()->createUrl('dashboard'); ?>"> 
                    <img src="<?php echo Yii::app()->request->baseUrl ?>/css/img/logos/logo_spmoa.png">
                </a>
                <span id="toggle_sidemenu_l" class="glyphicons glyphicons-show_lines"></span>
                <ul class="nav navbar-nav pull-right hidden">
                    <li>
                        <a href="#" class="sidebar-menu-toggle">
                            <span class="octicon octicon-ruby fs20 mr10 pull-right "></span>
                        </a>
                    </li>
                </ul>
            </div>

            <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/img/patterns/2_system_name.png" class="img-responsive w650 pull-left mt10" >
           <!-- 
            <form class="navbar-form navbar-left navbar-search " role="search">
                <div class="form-group">
                    <input type="text" class="form-control w150" placeholder="Carian Orang Asli..." value="Carian Orang Asli...">
                </div>
            </form> -->
  
            <ul class="nav navbar-nav navbar-right">
              <li class="mr10">
                    </br>
                    <?php echo date('d F Y') . ", " . date('h:i a') ; ?>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="flag-xs flag-es"></span>
                        <span class="fw600">Bahasa Melayu</span>
                    </a>
                    <ul class="dropdown-menu animated animated-short flipInX" role="menu">
                        <li>
                            <a href="javascript:void(0);" class="fw600">
                                <span class="flag-xs flag-us mr10"></span> English </a>
                        </li>
                    </ul>
                </li>
                <li class="ph10 pv20 hidden-xs"> <i class="fa fa-circle text-tp fs8"></i>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/img/avatars/1.jpg" alt="avatar" class="mw30 br64 mr15">
                        <span><?php echo Yii::app()->user->name; ?></span>
                        <span class="caret caret-tp hidden-xs"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-persist pn w250 bg-white" role="menu">
                    <?php if(!Yii::app()->user->isGuest) { ?>
                        <li class="br-t of-h">
                            <a href="<?php echo Yii::app()->controller->createUrl('/user/default/viewprofile'); ?>" class="fw600 p12 animated animated-short fadeInDown">
                                <span class="fa fa-gear pr5"></span> Profil </a>
                        </li>
                        <li class="br-t of-h">
                            <a href="<?php echo Yii::app()->controller->createUrl('/user/default/changepassword'); ?>" class="fw600 p12 animated animated-short fadeInDown">
                                <span class="glyphicons glyphicons-settings pr5"></span> Tukar Kata Laluan </a>
                        </li>
                    <?php } ?>
                        <li class="br-t of-h">
                            <a href="<?php echo Yii::app()->controller->createUrl('/site/logout'); ?>" class="fw600 p12 animated animated-short fadeInDown">
                                <span class="fa fa-power-off pr5"></span> Log Keluar </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </header>
        <!-- End: Header -->

        <!-- Start: Sidebar -->
        <aside id="sidebar_left" class="nano nano-primary">
            <div class="nano-content">

            <?php if($ftu_page == "/index.php/dashboard/default/index" || $ftu_page == "/index.php") { ?>

                <?php $this->widget('zii.widgets.CMenu',array(
                    'items'=>array(
                        array('label'=>'MENU PENTADBIR', 'itemOptions'=>array('class'=>'sidebar-label pt20'), 'visible'=>Yii::app()->user->checkAccess('User Manage')),

                        array('label'=>'MENU UTAMA', 'itemOptions'=>array('class'=>'sidebar-label pt20'), 'visible'=>Yii::app()->user->isGuest || Yii::app()->user->checkAccess("PegawaiNegeri") || Yii::app()->user->checkAccess("PegawaiDaerah") || Yii::app()->user->checkAccess("PegawaiPejabat")),

                        array('label'=>'<span class="glyphicons glyphicons-home"></span>
                            <span class="sidebar-title">Laman Utama</span>', 'url'=>array('/dashboard/default/index')),
                        array('label'=>'<span class="glyphicons glyphicons-cogwheels"></span> <span class="sidebar-title" rel="tooltip" data-toggle="tooltip" data-original-title="Sistem Kawalan Akses Berasaskan Peranan">SRBAC</span>', 'url'=>array('/srbac'), 'visible'=>Yii::app()->user->checkAccess('Developer') || Yii::app()->user->checkAccess('User Manage')),
                        array('label'=>'<span class="glyphicons glyphicons-user"></span> <span class="sidebar-title">Pengguna</span>', 'url'=>array('/user/default/index'), 'visible'=>Yii::app()->user->checkAccess('User Manage')),
                        array('label'=>'<span class="glyphicons glyphicons-cogwheel"></span> <span class="sidebar-title">Jawatan</span>', 'url'=>array('/roles/default/index'), 'visible'=>Yii::app()->user->checkAccess('Roles Manage')),
                        array('label'=>'<span class="glyphicon glyphicon-eye-open"></span> <span class="sidebar-title">Jejak Audit</span>', 'url'=>array('/audit/index'), 'visible'=>Yii::app()->user->checkAccess('User Manage')),
                        array('label'=>'<span class="glyphicons glyphicons-settings"></span> <span class="sidebar-title">Tetapan Sistem</span>', 'url'=>array('/tetapan/index'), 'visible'=>Yii::app()->user->checkAccess('User Manage')),
                        array('label'=>'<span class="glyphicon glyphicon-stats"></span> <span class="sidebar-title">Laporan</span>', 'url'=>array('/laporan/utama'), 'visible'=>Yii::app()->user->checkAccess('User Manage')),
                        array('label'=>'<span class="glyphicon glyphicon-hdd"></span> <span class="sidebar-title">Penyimpanan Data</span>', 'url'=>array('/backup/index'), 'visible'=>Yii::app()->user->checkAccess('User Manage')),

                        array('label'=>'MODUL OPERASI', 'itemOptions'=>array('class'=>'sidebar-label pt20'), 'visible'=>Yii::app()->user->checkAccess("Jakoa")),

                        array('label'=>'<span class="fa fa-user"></span> <span class="sidebar-title">Pengurusan Orang Asli</span>', 'url'=>array('/orangasli/index'), 'visible'=>Yii::app()->user->checkAccess('Jakoa')),

                        array('label'=>'<span class="fa fa-user-plus"></span> <span class="sidebar-title">Pendaftaran Baru </span>', 'url'=>array('/orangasli/step1'), 'visible'=>'true'),

                        array('label'=>'<span class="fa fa-check"></span> <span class="sidebar-title">Semakan Orang Asli </span>', 'url'=>array('/orangasli/pilihdaftar'), 'visible'=>'true'),

                        array('label'=>'<span class="fa fa-question"></span> <span class="sidebar-title">Permohonan Bantuan</span>', 'url'=>array(''), 'visible'=>Yii::app()->user->checkAccess('Pegawai Daerah')),

                        array('label'=>'<span class="fa fa-group"></span> <span class="sidebar-title">Keluarga Orang Asli</span>', 'url'=>array('/keluarga/index'), 'visible'=>Yii::app()->user->checkAccess('Jakoa')),

                        // array('label'=>'<span class="fa fa-book"></span> <span class="sidebar-title">Senarai Temujanji</span>', 'url'=>array('/temujanji/index'), 'visible'=>Yii::app()->user->checkAccess('Jakoa')),

                        array('label'=>'<span class="fa fa-credit-card"></span> <span class="sidebar-title">Pengurusan Kad Banci</span>', 'url'=>array('/kadbancian/index'), 'visible'=>Yii::app()->user->checkAccess('Jakoa')),

                        array('label'=>'<span class="glyphicon glyphicon-stats"></span> <span class="sidebar-title">Laporan Dan Statistik</span>', 'url'=>array('/laporan/utama'), 'visible'=>Yii::app()->user->checkAccess('User Manage')),

                        array('label'=>'<span class="fa fa-search"></span> <span class="sidebar-title">Carian</span>', 'url'=>array('/carian/index'), 'visible'=>Yii::app()->user->checkAccess('Jakoa')),

                        array('label'=>'<span class="fa fa-upload"></span> <span class="sidebar-title">Import/Export</span>', 'url'=>array('/import/index'), 'visible'=>Yii::app()->user->checkAccess('Jakoa')),

                    ),
                    'encodeLabel' => false,
                    'htmlOptions' => array(
                        'class'=>'nav sidebar-menu tour-item4',
                    ),
                )); ?>

            <?php } else { ?>

                   <?php $this->widget('zii.widgets.CMenu',array(
                    'items'=>array(
                        array('label'=>'MENU PENTADBIR', 'itemOptions'=>array('class'=>'sidebar-label pt20'), 'visible'=>Yii::app()->user->checkAccess('User Manage')),

                        array('label'=>'MENU UTAMA', 'itemOptions'=>array('class'=>'sidebar-label pt20'), 'visible'=>Yii::app()->user->isGuest || Yii::app()->user->checkAccess("PegawaiNegeri") || Yii::app()->user->checkAccess("PegawaiDaerah") || Yii::app()->user->checkAccess("PegawaiPejabat")),

                        array('label'=>'<span class="glyphicons glyphicons-home"></span>
                            <span class="sidebar-title">Laman Utama</span>', 'url'=>array('/dashboard/default/index')),
                        array('label'=>'<span class="glyphicons glyphicons-cogwheels"></span> <span class="sidebar-title" rel="tooltip" data-toggle="tooltip" data-original-title="Sistem Kawalan Akses Berasaskan Peranan">SRBAC</span>', 'url'=>array('/srbac'), 'visible'=>Yii::app()->user->checkAccess('Developer') || Yii::app()->user->checkAccess('User Manage')),
                        array('label'=>'<span class="glyphicons glyphicons-user"></span> <span class="sidebar-title">Pengguna</span>', 'url'=>array('/user/default/index'), 'visible'=>Yii::app()->user->checkAccess('User Manage')),
                        array('label'=>'<span class="glyphicons glyphicons-cogwheel"></span> <span class="sidebar-title">Jawatan</span>', 'url'=>array('/roles/default/index'), 'visible'=>Yii::app()->user->checkAccess('Roles Manage')),
                        array('label'=>'<span class="glyphicon glyphicon-eye-open"></span> <span class="sidebar-title">Jejak Audit</span>', 'url'=>array('/audit/index'), 'visible'=>Yii::app()->user->checkAccess('User Manage')),
                        array('label'=>'<span class="glyphicons glyphicons-settings"></span> <span class="sidebar-title">Tetapan Sistem</span>', 'url'=>array('/tetapan/index'), 'visible'=>Yii::app()->user->checkAccess('User Manage')),
                        array('label'=>'<span class="glyphicon glyphicon-hdd"></span> <span class="sidebar-title">Penyimpanan Data</span>', 'url'=>array('/backup/index'), 'visible'=>Yii::app()->user->checkAccess('User Manage')),

                        array('label'=>'MODUL OPERASI', 'itemOptions'=>array('class'=>'sidebar-label pt20'), 'visible'=>Yii::app()->user->checkAccess("Jakoa")),

                        array('label'=>'<span class="fa fa-user"></span> <span class="sidebar-title">Pengurusan Orang Asli</span>', 'url'=>array('/orangasli/index'), 'visible'=>Yii::app()->user->checkAccess('Jakoa')),

                        array('label'=>'<span class="fa fa-user-plus"></span> <span class="sidebar-title">Pendaftaran Baru </span>', 'url'=>array('/orangasli/step1'), 'visible'=>'true'),

                        array('label'=>'<span class="fa fa-check"></span> <span class="sidebar-title">Semakan Orang Asli </span>', 'url'=>array('/orangasli/pilihdaftar'), 'visible'=>'true'),

                        array('label'=>'<span class="fa fa-question"></span> <span class="sidebar-title">Permohonan Bantuan</span>', 'url'=>array(''), 'visible'=>Yii::app()->user->checkAccess('Pegawai Daerah')),

                        array('label'=>'<span class="fa fa-group"></span> <span class="sidebar-title">Keluarga Orang Asli</span>', 'url'=>array('/keluarga/index'), 'visible'=>Yii::app()->user->checkAccess('Jakoa')),

                        // array('label'=>'<span class="fa fa-book"></span> <span class="sidebar-title">Senarai Temujanji</span>', 'url'=>array('/temujanji/index'), 'visible'=>Yii::app()->user->checkAccess('Jakoa')),

                        array('label'=>'<span class="fa fa-credit-card"></span> <span class="sidebar-title">Pengurusan Kad Banci</span>', 'url'=>array('/kadbancian/index'), 'visible'=>Yii::app()->user->checkAccess('Jakoa')),

                        array('label'=>'<span class="glyphicon glyphicon-stats"></span> <span class="sidebar-title">Laporan Dan Statistik</span>', 'url'=>array('/laporan/utama'), 'visible'=>Yii::app()->user->checkAccess('User Manage')),

                        array('label'=>'<span class="fa fa-search"></span> <span class="sidebar-title">Carian</span>', 'url'=>array('/carian/index'), 'visible'=>Yii::app()->user->checkAccess('Jakoa')),

                        array('label'=>'<span class="fa fa-upload"></span> <span class="sidebar-title">Import/Export</span>', 'url'=>array('/import/index'), 'visible'=>Yii::app()->user->checkAccess('Jakoa')),

                    ),
                    'encodeLabel' => false,
                    'htmlOptions' => array(
                        'class'=>'nav sidebar-menu',
                    ),
                )); ?>

            <?php } ?>

                <div class="sidebar-toggle-mini">
                    <a href="#">
                        <span class="fa fa-sign-out"></span>
                    </a>
                </div>
            </div>
        </aside>

        <!-- Start: Content-Wrapper -->
        <section id="content_wrapper">
            <!-- Start: Topbar -->
            <header id="topbar">
                <div class="topbar-left">
                    <?php if(isset($this->breadcrumbs)):?>
                        <?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,'separator'=>'<i class="fa fa-angle-right mh10"></i>', 'htmlOptions'=>array('class'=>'breadcrumb'), 'homeLink'=>'<a href='.Yii::app()->controller->createUrl("/dashboard/default/index").'><span class="glyphicon glyphicon-home"></span></a>',)); ?><!-- breadcrumbs -->
                    <?php endif ?>
                </div>
            </header>
            <!-- End: Topbar -->

            <!-- Begin: Content -->
            <?php echo $content; ?>
            <!-- End: Content -->

        </section>
        <!-- End: Content-Wrapper -->

    </div>
    <!-- End: Main -->

<!-- Begin: Page Script -->
<?php
Yii::app()->getClientScript()->registerCoreScript( 'jquery.ui' );
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/bootstrap/bootstrap.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/utility/bootbox/bootbox.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/utility/utility.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/main.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/select2.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScript(
    'template_main', 
    "
    Core.init({
        sbm: 'sb-l-c',
    });

    $('body').tooltip({
    selector: '[rel=tooltip]'
    });
    ",
    CClientScript::POS_READY
);
?>
<!-- End: Page Script -->

    <?php
    Yii::app()->clientScript->registerScript(
            'template_main', 
            '
            Core.init({
                sbm: \'sb-l-c\',
            });',
            CClientScript::POS_READY
        );
    ?>

    <!-- END: PAGE SCRIPTS -->

<!-- Start Bootstrap Tour For FTU - UI -->

<!-- Plugin CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/bstour/bootstrap-tour.css">

<?php
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/bstour/bootstrap-tour.js', CClientScript::POS_END);
?>
 
<?php
Yii::app()->clientScript->registerScript(
        'dashboard', 
        '
var tour = new Tour({
              backdrop: false, // can mask content in a modal
              storage: false, // can use localstorage
              template: "<div class=\'popover tour\'><div class=\'arrow\'></div><h3 class=\'popover-title\'></h3><div class=\'popover-content\'></div><nav class=\'popover-navigation\'><div class=\'btn-group\'><button class=\'btn btn-default\' data-role=\'prev\'>« Prev</button><button class=\'btn btn-default\' data-role=\'next\'>Next »</button></div><button class=\'btn btn-default btn-end\' data-role=\'end\'>Tamat</button></nav></div>",
              // onEnd: function (tour) { // On Tour Complete
              //   alert(\'You have completed the tour. This is an "onEnd" callback\');
              // },
              steps: [
                {
                  element: "#tour-item1",
                  title: "Notifikasi sistem",
                  content: "Paparan peringatan penting bagi sistem",
                  placement: \'bottom\',
                  backdrop: false,
                 
                },
                {
                  element: "#tour-item2",
                  title: "Jejak Audit Terbaru",
                  content: "Jejak penggunaan aplikasi sistem SPMOA di sini",
                  placement: \'left\',
                  backdrop: false
                },
                {
                  element: "#tour-item3",
                  title: "Statistik Pendaftaran Orang Asli",
                  content: "Paparan statistik report orang asli yang berdaftar",
                  placement: \'top\',
                  backdrop: false
                },
                {
                  element: ".tour-item4",
                  title: "Modul Sistem",
                  content: "Capaian modul sistem boleh diakses dari sini",
                  placement: \'right\',
                  backdrop: false
                },
                // {
                //   element: "#tour-item5",
                //   title: "Fast Notification",
                //   content: "Unpaid Application",
                //   placement: \'bottom\',
                //   backdrop: false
                // },
              ]
            });

            // Init the tour
            tour.init();
        
            // // Start tour on click
            // $(\'#tour_start\').on(\'click\',function(){
                tour.restart();
            // });
        ',
        CClientScript::POS_READY
    );
?>


<!-- End First Time User -->

</body>

</html>
