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
            ]
        ],
        'modules' => [
            'debug' => 'yii\debug\Module'
        ]
    ];