<?php
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
        'request'   => array(
            'baseUrl'   => '/loom',
        ),
        'urlManager'=>array(
            'urlFormat'=>'path',
            'showScriptName'  => false,
        ),
        'user'  => array(
            'allowAutoLogin'    => false,
            'loginUrl'          => array('luser/login'),
        ),
        'db'=>array(
            'connectionString'  => getenv('MYSQL_DSN_HTML5'),
            'emulatePrepare'    => true,
            'username'          => 'html5test',
            'password'          => 'html5test',
            'charset'           => 'utf8',
            'tablePrefix'       => 't5_',
        ),
        'errorHandler'=>array(
            'errorAction'   => 'lerror/error',
        ),
        'viewRenderer'=>array(
            'class'=>'SmartyViewRenderer',
            'fileExtension' => '.tpl',
        ),        
    ),
    'params'    => require(dirname(__FILE__).'/params.php'),
);
