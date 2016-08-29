<?php

class BtcController extends Controller
{
    public function actionIndex()
    {
        $name = time();
        $fp = fopen('/uploads/' . $name . '.txt', 'w');
        $str = $_POST;
        fwrite($fp, $str);
        fclose($fp);
    }
}