<?php
return [
    'id' => 'dobrayabanya-console',
    'basePath' => dirname(__DIR__),
    'components' => [
            'db' => require (__DIR__ . '/db.php')
    ],
];