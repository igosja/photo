<?php

class IndexController extends CController
{
    public $defaultAction = 'index';

    public function actionIndex()
    {
        $this->render('index');
    }
}