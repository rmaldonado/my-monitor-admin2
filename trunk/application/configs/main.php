<?php

// This is the main Web application configuration. Any writable
// application properties can be configured here.

return array(
	'basePath'  => dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR,
	'name'      => 'Yii Framework: Phone Book Demo',
    'preload'   => array('log'),
	// autoloading model and component classes
	'import'    => array(
		'application.models.*',
		'application.components.*',
	),

	// application components
	'components'    => array(
		'db'=>array(
			'connectionString'  => getenv('MYSQL_DSN_HTML5'),
			'emulatePrepare'    => true,
			'username'          => 'html5test',
			'password'          => 'html5test',
			'charset'           => 'utf8',
			'tablePrefix'       => 't5_',
		),
        'errorHandler'=>array(
            'errorAction'   => 'site/error',
        ),
        'viewRenderer'=>array(
          'class'=>'SmartyViewRenderer',
            'fileExtension' => '.tpl',
            //'pluginsDir' => 'application.smartyPlugins',
            //'configDir' => 'application.smartyConfig',
        ),        
	),
    'params'    => require(dirname(__FILE__).'/params.php'),
);
