<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/framework/yii.php'; // Sesuaikan path Yii framework
$config=dirname(__FILE__).'/protected/config/main.php'; // Path untuk konfigurasi aplikasi

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG', true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

// include Yii bootstrap file
require_once($yii);
// create and run the application
Yii::createWebApplication($config)->run();
