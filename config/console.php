<?php
return [
    'id' => 'dobrayabanya-console',
    'basePath' => dirname(__DIR__),
    'components' => [
    'db'     => [
        'class' => 'yii\db\Connection',
        'dsn'      => 'mysql:host=localhost;dbname=baseDb',
        'username' => 'root',
        'password' => '',
//                'enableSchemaCache'   => true,
//                'schemaCacheDuration' => 3600,
//                'tablePrefix'         => '',
//                'charset'             => 'utf8mb4',
//                'enableQueryCache'    => true,
//                'queryCacheDuration'  => 600,
    ]
    ],
];