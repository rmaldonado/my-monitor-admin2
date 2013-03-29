<?php

$phpIncludePath = ini_get('include_path');
$phpIncludePath .= ':' . dirname(dirname(__FILE__)) . '/library/yii1.1.13';
$phpIncludePath .= ':' . dirname(dirname(__FILE__)) . '/library/smarty3.1.13';
$yiiConfigPath = dirname(dirname(__FILE__)) . '/application/configs';

ini_set('include_path', $phpIncludePath);

defined('YII_DEBUG') or define('YII_DEBUG',true);

require_once('Smarty.class.php');
require_once('yii.php');

$configFile = $yiiConfigPath . '/main.php';
// remove the following line when in production mode

Yii::createWebApplication($configFile)->run();

