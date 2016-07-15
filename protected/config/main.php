<?php

return array(
    'defaultController' => 'index',
    'components' => array(
        'urlManager' => array(
            'urlFormat' => 'path',
            'rules' => array(
                '<module>' => '<module>/index',
                '<module>/<controller>' => '<module>/<controller>',
                '<module>/<controller>/<action>' => '<module>/<controller>/<action>',
                '<module>/<controller>/<action>/<id>' => '<module>/<controller>/<action>',
                '<controller>' => '<controller>/index',
                '<controller>/<action>' => '<controller>/<action>',
                '<controller>/<action>/<id>' => '<controller>/<action>',
            ),
        ),
    ),
    'modules' => array(
        'admin',
    ),
);