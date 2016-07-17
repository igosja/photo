<?php

class PortfolioController extends Controller
{
    public function actionIndex()
    {
        $o_photo = PhotoPage::model()->findByPk(1);
        $this->setSEO($o_photo);
        $this->breadcrumbs[] = array('url' => 'index/index', 'text' => 'Главная');
        $this->breadcrumbs[] = array('text' => 'Портфолио');
        $a_photocategory = PhotoCategory::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        $this->render('index', array('a_photocategory' => $a_photocategory));
    }
}