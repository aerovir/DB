<?php


    return [
        'id'        => 'DobrayaBanya',
        'basePath'  => realpath(__DIR__ . '/../'),
        'bootstrap' => [
            'debug'
        ],
        'components' => [
            'urlManager' => [
                'class' => 'yii\web\UrlManager',
                'enablePrettyUrl' => true,
                'showScriptName'  => false,
            ],
            'request' => [
                'cookieValidationKey' => '1234567890'
            ],
            'db' => require (__DIR__ . '/db.php')
        ],
        'modules' => [
            'debug' => 'yii\debug\Module'
        ],
        'controllerMap' => [
            'migrate' => [
                'class' => 'yii\console\controllers\MigrateController',
                'migrationNamespaces' => [
                    'app\migrations',
                    'some\extension\migrations',
                ],
                //'migrationPath' => null, // allows to disable not namespaced migration completely
        ],
    ],
    ];