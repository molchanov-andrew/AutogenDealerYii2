<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'storage' =>[
            'class' => 'common\components\Storage'
        ],
        'choosetable' =>[
            'class' => 'common\components\ChooseTable'
        ],
        'resizeimage' =>[
            'class' => 'common\components\ResizeImage'
        ]
    ],
];
