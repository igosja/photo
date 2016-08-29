<?php

class BtcController extends Controller
{
    public function actionIndex()
    {
        $data = file_get_contents('php://input');

        $path = __DIR__ . '/../..';
        $name = time();
        $fp = fopen($path . '/uploads/' . $name . '.txt', 'w');
        $str = $data;
        fwrite($fp, $str);
        fclose($fp);
    }
}