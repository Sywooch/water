<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'ru-RU',
    'sourceLanguage' => 'en-US',
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'cart' => [
            'class' => 'frontend\components\Cart'
        ],
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => true,
            'rules' => [
                'category/<id:\d+>' => 'category/view',
                [
                    'pattern' => '',
                    'route' => 'shop/index',
                    'suffix' => ''
                ],
                [
                    'pattern' => 'about',
                    'route' => 'site/about',
                    'suffix' => ''
                ],
                [
                    'pattern' => 'contact',
                    'route' => 'site/contact',
                    'suffix' => ''
                ],
                [
                    'pattern' => 'terms-of-use',
                    'route' => 'site/terms-of-use',
                    'suffix' => ''
                ],
                [
                    'pattern' => 'products/lists/<id:\d+>',
                    'route' => 'products/lists>',
                    'suffix' => ''
                ],
                [
                    'pattern' => '<controller>/<action>/<id:\d+>',
                    'route' => '<controller>/<action>',
                    'suffix' => ''
                ],
                [
                    'pattern' => '<controller>/<action>',
                    'route' => '<controller>/<action>',
                    'suffix' => ''
                ],
            ],
        ],
        'cart' => [
            'class' => 'yii2mod\cart\Cart',
            // you can change default storage class as following:
            'storageClass' => [
                'class' => 'yii2mod\cart\storage\DatabaseStorage',
                // you can also override some properties 
                'deleteIfEmpty' => true
            ]
        ],
    ],
    'params' => $params,
];
