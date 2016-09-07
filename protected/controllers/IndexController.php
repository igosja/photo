<?php

class IndexController extends Controller
{
    public function actionIndex()
    {
        $a_slide = Slide::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        $a_album = Album::model()->findAllByAttributes(
            array('status' => 1),
            array('order' => 'RAND()', 'limit' => 12)
        );
        $o_mainpage = MainPage::model()->findByPk(1);
        $this->setSEO($o_mainpage);
        $this->render('index', array('o_mainpage' => $o_mainpage, 'a_slide' => $a_slide, 'a_album' => $a_album));
    }
}