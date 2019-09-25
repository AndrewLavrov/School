<?php

return [
    'id' => 'school',
    'basePath' => realpath(__DIR__.'/../'),
    'bootstrap' => ['debug'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false
        ],
        'request' => ['cookieValidationKey' => 'super secret code'],
        'db' => require (__DIR__ . '/db.php')
    ],
    'modules' => [
        'debug' => [
            'class' => 'yii\debug\Module'
            // uncomment and adjust the following to add your IP if you are not connecting from localhost.
            //'allowedIPs' => ['127.0.0.1', '::1'],
        ]

    ]
];

?>