<?php

function trace($data, $terminate = false){
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    if ($terminate){
        die('<h3>Program terminated!</h3>');
    }
}

$config = [
    'id' => 'basic',
    'language' => 'ru-RU',
    'as AppBehavior' => [
        'class' => '\app\components\behaviors\AppBehavior'
    ],
    'modules' => [
        'gridview' => [
            'class' => '\kartik\grid\Module'
        ],
        'admin' => [
            'class' => 'app\modules\admin\AdminModule'
        ],
    ],
    'components' => [
        'request' => [
            'cookieValidationKey' => 'CbX8jg4m9fJ9AxHk6IhjzOXZGIw4Zo8O'
        ],
        'errorHandler' => [
            'errorAction' => 'site/error'
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => true
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'normalizer' => [
                'class' => 'yii\web\UrlNormalizer',
                'collapseSlashes' => true,
                'normalizeTrailingSlash' => true
            ],
            'rules' => [
                '/' => 'site/index',
                'login' => 'site/login',
                'logout' => 'site/logout',
                'menu/<slug:[\w\-]+>' => 'site/menu',
                'service/<slug:[\w\-]+>' => 'site/service',

                // admins
                'admin/<controller:[\w-]+>/<action:[\w-]+>' => 'admin/<controller>/<action>',
                'admin/<action:\w+>' => 'admin/admin/<action>',

                'admin' => 'admin/admin/index'
            ]
        ]
    ]
];

$envConfig = __DIR__ . '/' . YII_ENV . '/web.php';

return \yii\helpers\ArrayHelper::merge(
    $config,
    file_exists($envConfig) ? require($envConfig) : []
);
