<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
   Yii::setPathOfAlias('chartjs', dirname(__FILE__).'/../extensions/yii-chartjs');
   
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

//Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Moovawt',
	'theme'=>'hebo',
		
	// preloading 'log' component
	'preload'=>array('log','chartjs'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.extensions.*',
		'ext.gmap.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123456',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
			 'generatorPaths'=>array(
                'bootstrap.gii',
            ),
		),
		
	),

	// application components
	'components'=>array(
	
				'chartjs'=>array(
			'class' => 'chartjs.components.ChartJs',
							),
 'bootstrap'=>array(
            'class'=>'bootstrap.components.Bootstrap',
        ),
 'widgetFactory' => array(
                    'widgets' => array(
						  'CJuiWidget' => array(
						                    'themeUrl' => '/css/jqueryui',
						                    'theme' => 'fc',
						                			),
						  'CJuiDialog' => array(
						                    'themeUrl' => '/css/jqueryui',
						                    'theme' => 'fc',
						                			),	
						  'CJuiButton' => array(
						                    'themeUrl' => '/css/jqueryui',
						                    'theme' => 'fc',
						                			),		
						  'CJuiDatePicker' => array(
						                    'themeUrl' => '/css/jqueryui',
						                    'theme' => 'fc',
						                			),	
						  'CJuiAccordion' => array(
						                    'themeUrl' => '/css/jqueryui',
						                    'theme' => 'fc',
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
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		 */ 
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=moovawt',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'heaVEN173',
			'charset' => 'utf8',
			'tablePrefix'=>'tbl_'
		),
		
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
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);