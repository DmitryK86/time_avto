<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset'
    ],
    'components' => [
        'db' => [
            'class' => '\yii\db\Connection',
            'dsn' => "mysql:host={$params['db']['host']};dbname={$params['db']['dbName']}",
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8'
        ],
        'user' => [
            'class' => 'yii\web\User',
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache'
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning']
                ]
            ]
        ]
    ],
    'params' => $params
];

$envConfig = __DIR__ . '/' . YII_ENV . '/common.php';

return \yii\helpers\ArrayHelper::merge(
    $config,
    file_exists($envConfig) ? require($envConfig) : []
);