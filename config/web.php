<?php
return [
    'id' => 'crmapp',
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
            'allowedIPs' => ['192.168.233.*']
        ],
    ],
    'basePath' => realpath(__DIR__ . '/../'),
    'components' => [
        'request' => [
                'cookieValidationKey' => 'your secret key here',
        ],
        'db' => require(__DIR__ . '/db.php'),
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
    ],
    'extensions' => require(__DIR__ . '/../vendor/yiisoft/extensions.php')
];