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
                'portfolio/ajaxindex' => 'portfolio/ajaxindex',
                'portfolio/ajaxview' => 'portfolio/ajaxview',
                'portfolio/category/<id>' => 'portfolio/index',
                'portfolio/<id>' => 'portfolio/view',
                'portfolio' => 'portfolio/index',
                'photo/<id>' => 'photo/view',
                '<controller>/<action>/<id>' => '<controller>/<action>',
                '<controller>/<action>' => '<controller>/<action>',
                '<controller>' => '<controller>/index',
                '<module>/<controller>/<action>/<id>' => '<module>/<controller>/<action>',
                '<module>/<controller>/<action>' => '<module>/<controller>/<action>',
                '<module>/<controller>' => '<module>/<controller>',
                '<module>' => '<module>/index',
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