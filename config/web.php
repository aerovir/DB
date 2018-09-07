<?php


    return [
        'id'        => 'DB',
        'basePath'  => realpath(__DIR__ . '/../'),
        'components' => [
            'urlManager' => [
                'class' => 'yii\web\UrlManager',
                'enablePrettyUrl' => true,
                'showScriptName'  => false
            ]
        ]
    ];