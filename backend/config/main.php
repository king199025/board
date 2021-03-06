<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'language' => 'ru-RU',
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'ads_fields_type' => [
            'class' => 'backend\modules\ads_fields_type\Ads_fields_type',
        ],
        'ads_fields' => [
            'class' => 'backend\modules\ads_fields\Ads_fields',
        ],
        'group_ads_fields' => [
            'class' => 'backend\modules\group_ads_fields\Group_ads_fields',
        ],
        'ads_fields_default_value' => [
            'class' => 'backend\modules\ads_fields_default_value\Ads_fields_default_value',
        ],
        'category' => [
            'class' => 'backend\modules\category\Category',
        ],
        'adsmanager' => [
            'class' => 'backend\modules\adsmanager\Adsmanager',
        ],
    ],
    'components' => [
        'urlManagerFrontend' => [
            'class' => 'yii\web\urlManager',
            'baseUrl' => '',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        /*'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],*/
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
        'request'      => [
            'baseUrl' => '/secure',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'fields_type' => 'ads_fields_type/ads_fields_type',
                'fields_type/create' => 'ads_fields_type/ads_fields_type/create',
                'fields_type/<id:\d+>' => 'ads_fields_type/ads_fields_type/view',
                'fields_type/update/<id:\d+>' => 'ads_fields_type/ads_fields_type/update',

                'group_fields' => 'group_ads_fields/group_ads_fields',
                'group_fields/create' => 'group_ads_fields/group_ads_fields/create',
                'group_fields/<id:\d+>' => 'group_ads_fields/group_ads_fields/view',
                'group_fields/update/<id:\d+>' => 'group_ads_fields/group_ads_fields/update',

                'fields' => 'ads_fields/ads_fields',
                'fields/create' => 'ads_fields/ads_fields/create',
                'fields/<id:\d+>' => 'ads_fields/ads_fields/view',
                'fields/update/<id:\d+>' => 'ads_fields/ads_fields/update',

                'fields_val_def' => 'ads_fields_default_value/ads_fields_default_value',
                'fields_val_def/create' => 'ads_fields_default_value/ads_fields_default_value/create',
                'fields_val_def/<id:\d+>' => 'ads_fields_default_value/ads_fields_default_value/view',
                'fields_val_def/update/<id:\d+>' => 'ads_fields_default_value/ads_fields_default_value/update',

                'category' => 'category/category',
                'category/create' => 'category/category/create',
                'category/<id:\d+>' => 'category/category/view',
                'category/update/<id:\d+>' => 'category/category/update',

                'adsmanager' => 'adsmanager/adsmanager',

            ]
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
        ],
    ],
    'params' => $params,
];
