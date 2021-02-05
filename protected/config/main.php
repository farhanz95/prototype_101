<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'SPMOA', // Sistem Pengurusan Maklumat Orang Asing
	//'sourceLanguage'=>'id',
	'timeZone' => 'Asia/Kuala_Lumpur',
	'defaultController' => 'dashboard',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.extensions.grid.*',
		'application.modules.srbac.controllers.SBaseController',
	),

	'modules'=>array(
		'user',
		'dashboard',
		'roles',
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'password',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),

		'srbac' => array(
			'userclass'=>'User', //default: User
			'userid'=>'id', //default: userid
			'username'=>'login', //default:username
			'delimeter'=>'@', //default:-
			'debug'=>true, //default :false
			'pageSize'=>10, // default : 15
			'superUser' =>'Developer', //default: Authorizer
			'css'=>'srbac.css', //default: srbac.css
			'layout'=>
			'application.views.layouts.template_srbac', //default: application.views.layouts.main, 
			//must be an existing alias
			'notAuthorizedView'=> 'application.views.site.error', // default:
			//srbac.views.authitem.unauthorized, must be an existing alias
			'alwaysAllowed'=>array( //default: array()
			'SiteLogin','SiteLogout','SiteError','SiteCaptcha'),
			'userActions'=>array('Show','View','List'), //default: array()
			'listBoxNumberOfLines' => 15, //default : 10
			'imagesPath' => 'srbac.images', // default: srbac.images
			'imagesPack'=>'noia', //default: noia / tango
			'iconText'=>true, // default : false
			'header'=>'srbac.views.authitem.header', //default : srbac.views.authitem.header,
			//must be an existing alias
			'footer'=>'srbac.views.authitem.footer', //default: srbac.views.authitem.footer,
			//must be an existing alias
			'showHeader'=>false, // default: false
			'showFooter'=>false, // default: false
			'alwaysAllowedPath'=>'srbac.components', // default: srbac.components
			// must be an existing alias
		)
		
	),

	// application components
	'components'=>array(

		'widgetFactory' => array(
            'widgets' => array(
                'CLinkPager' => array(
                    'htmlOptions' => array(
                        'class' => 'pull-right pagination'
                    ),
                    'header' => false,
                    'maxButtonCount' => 5,
                    'cssFile' => false,
                ),
                'CGridView' => array(
                    'htmlOptions' => array(
                        'class' => 'table-bordered table-responsive'
                    ),
                    'cssFile' => false,
                    'pagerCssClass' => 'dataTables_paginate paging_bootstrap',
                    'itemsCssClass' => 'table table-striped table-hover',
                    'summaryCssClass' => 'dataTables_info',
                    'summaryText' => 'Showing {start} to {end} of {count} entries',
                    'template' => '{items}<div class="dt-panelfooter clearfix">{summary}<div class="dataTables_paginate paging_simple_numbers">{pager}</div></div>',
                ),
            ),
        ),



		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),


		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		

		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),

		'authManager'=>array(
			// Path to SDbAuthManager in srbac module if you want to use case insensitive
			//access checking (or CDbAuthManager for case sensitive access checking)
			'class'=>'application.modules.srbac.components.SDbAuthManager',
			// The database component used
			'connectionID'=>'db',
			// The itemTable name (default:authitem)
			'itemTable'=>'items',
			// The assignmentTable name (default:authassignment)
			'assignmentTable'=>'assignments',
			// The itemChildTable name (default:authitemchild)
			'itemChildTable'=>'itemchildren',
		),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),


);

