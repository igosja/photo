<?php

return array(
    'defaultController' => 'index',
    'language' => 'ru',
    'sourceLanguage' => 'ru',
    'timeZone' => 'UTC',

    'import' => array(
        'application.models.*',
        'application.components.*',
    ),

    'components' => array(
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => array(
                '' => 'index/index',
                'blog' => 'blog/index',
                'blog/<id>' => 'blog/view',
                'contacts' => 'contacts/index',
                'price' => 'price/index',
                'portfolio/category/<id>' => 'portfolio/index',
                'portfolio/<id>' => 'porfolio/view',
                'portfolio' => 'portfolio/index',
                '<controller>/<action>/<id>' => '<controller>/<action>',
                '<controller>/<action>' => '<controller>/<action>',
                '<controller>' => '<controller>/index',
                '<module>/<controller>/<action>/<id>' => '<module>/<controller>/<action>',
                '<module>/<controller>/<action>' => '<module>/<controller>/<action>',
                '<module>/<controller>' => '<module>/<controller>',
                '<module>' => '<module>/index',
                'gii' => 'gii',
                'gii/<controller:\w+>' => 'gii/<controller>',
                'gii/<controller:\w+>/<action:\w+>' => 'gii/<controller>/<action>',
            ),
        ),

        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=plakhotn_photo',
            'emulatePrepare' => true,
            'username' => 'plakhotn_photo',
            'password' => '?aVq56*m',
            'charset' => 'utf8',
        ),
    ),

    'modules' => array(
        'admin',
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => '123',
        ),
    ),
);