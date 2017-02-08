<?php
define('UC_CONNECT', 'mysql');
define('UC_DBHOST', 'localhost');
define('UC_DBUSER', 'root');
define('UC_DBPW', '');
define('UC_DBNAME', 'demo_ucenter');
define('UC_DBCHARSET', 'utf8');
define('UC_DBTABLEPRE', '`demo_ucenter`.uc_');
define('UC_DBCONNECT', '0');
define('UC_KEY', '1983ZD2lM+tRoj4xmnHgpbrXNuENNvZoW/lzyoY');
define('UC_API', 'http://ucenter.demo');
define('UC_CHARSET', 'utf-8');
define('UC_IP', '');
define('UC_APPID', '1');
define('UC_PPP', '20');

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'yii-ucenter用户中心范例',
    'language'=>'zh_cn',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
        'ext.ucenter.interface.UC_IUser',
        'ext.ucenter.class.*',
        'ext.ucenter.UCenter',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool

		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123456',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=demo_web1',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
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
					'levels'=>'error, warning, trace',
				),
				// uncomment the following to show log messages on web pages

				array(
					'class'=>'CWebLogRoute',
                    'levels'=>'error',
                    'categories'=>'cool.*,system.db.*', //这个最好设置
				),
			),
		),
	)
);
