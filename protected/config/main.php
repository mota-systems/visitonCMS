<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Point24',
    'homeUrl' => '/main',
    'defaultController' => 'page',
    'language' => 'ru',

    // preloading 'log' component
    'preload' => array('log'),

    // autoloading model and component classes
    'import' => array(
        'application.helpers.*',
        'application.models.*',
        'application.components.*',
        'ext.fckeditor.*',
    ),

    'modules' => array(
        // uncomment the following to enable the Gii tool

        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => '0000',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('178.236.140.18', '::1'),
        ),

    ),

    // application components
    'components' => array(
        'image' => array(
            'class' => 'ext.image.CImageComponent',
            // GD or ImageMagick
            'driver' => 'GD',
            // ImageMagick setup path
            'params' => array('directory' => '/opt/local/bin'),
        ),
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => TRUE,
            'loginUrl' => array('backend/login'),
        ),
        // uncomment the following to enable URLs in path-format

        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => FALSE,
            'caseSensitive' => FALSE,
            'rules' => array(
                'backend/<act:(login|logout)>' => 'backend/site/<act>',
                'backend' => 'backend/site',
                'backend/<controller:\w+>/<id:\d+>' => 'backend/<controller>/view',
                'backend/<controller:\w+>/<action:\w+>/<id:\d+>' => 'backend/<controller>/<action>',
                'backend/<controller:\w+>/<action:\w+>' => 'backend/<controller>/<action>',
                'vidy_rabot' => 'jobs/index',
                'vidy_rabot/<action:\w+>' => 'jobs/<action>',
                'vidy_rabot/<id:\d+>' => 'jobs/view',
                'vidy_rabot/<action:\w+>/<id:\d+>' => 'jobs/<action>',
                '<act:(login|logout)>' => 'site/<act>',
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                array(
                    'class' => 'application.components.PageUrlRule'
                ),
            ),
        ),
        // uncomment the following to use a MySQL database

        'db' => array(
            'connectionString' => 'mysql:host=mota-systems.pro;dbname=motasystems_autoservice',
            'emulatePrepare' => TRUE,
            'username' => 'motasystems_auto',
            'password' => 'cNBWibzi',
            'charset' => 'utf8',
            'enableParamLogging' => 0,
            'enableProfiling' => TRUE,
            'schemaCachingDuration' => defined('YII_DEBUG') ? 0 : '3600',
        ),

        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
                array(
                    'class' => 'CWebLogRoute',
                    'levels' => 'error, warning',
                    'showInFireBug' => TRUE,
                ),
                array(
                    'class' => 'application.extensions.yii-debug-toolbar-master.yii-debug-toolbar.YiiDebugToolbarRoute',
                    'ipFilters' => array('127.0.0.1', '178.236.140.18'),
                ),
            ),
        ),
    ),

    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'webmaster@example.com',
    ),
);