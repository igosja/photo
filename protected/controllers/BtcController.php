<?php

class BtcController extends Controller
{
    public function actionIndex()
    {
        $path = __DIR__ . '/../..';
        $name = time();
        $fp = fopen($path . '/uploads/' . $name . '.txt', 'w');
        $str = serialize($_POST);
        fwrite($fp, $str);
        fclose($fp);
    }
}