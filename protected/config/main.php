<?php

return array(
    'name'=>'Hangman Game',
    'defaultController'=>'index',
    'components'=>array(
        'urlManager'=>array(
            'urlFormat'=>'path',
            'rules'=>array(
                'index/guess/<g:\w>'=>'index/guess',
            ),
        ),
    ),
);