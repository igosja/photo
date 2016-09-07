<?php

class IndexController extends Controller
{
    public function actionIndex()
    {
        $o_mainpage = MainPage::model()->findByPk(1);
        $a_slide = Slide::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        $this->setSEO($o_mainpage);
        $this->render('index', array('o_mainpage' => $o_mainpage, 'a_slide' => $a_slide));
    }
}