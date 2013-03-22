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
			'connectionString'  => 'mysql:host=html5test.db;port=7788;dbname=html5test',
			'emulatePrepare'    => true,
			'username'          => 'html5test',
			'password'          => 'html5test',
			'charset'           => 'utf8',
			'tablePrefix'       => 't5_',
		),
        'errorHandler'=>array(
            'errorAction'   => 'site/error',
        ),        
	),
    'params'    => require(dirname(__FILE__).'/params.php'),
);
