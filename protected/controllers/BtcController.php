<?php

class BtcController extends Controller
{
    public function actionIndex()
    {
        $name = time();
        $fp = fopen('/uploads/' . $name . '.txt', 'r');
        $str = $_POST;
        fwrite($fp, $str);
        fclose($fp);
    }
}