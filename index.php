<?php

// change the following paths if necessary
$config=dirname(__FILE__).'/protected/config/main.php';
//$yii = dirname(__FILE__).'/../../yii/yii.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

//require $yii;
require(dirname(__FILE__) . '/../../yii/YiiBase.php');
class Yii extends YiiBase
{
    /**
     * @static
     * @return CWebApplication
     */
    public static function app()
    {
        return parent::app();
    }
}
Yii::createWebApplication($config)->run();
