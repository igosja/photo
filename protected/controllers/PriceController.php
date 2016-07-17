<?php

class PriceController extends Controller
{
    public function actionIndex()
    {
        $o_pricepage = PricePage::model()->findByPk(1);
        $this->setSEO($o_pricepage);
        $a_pricecategory = PriceCategory::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        $this->render('index', array('o_pricepage' => $o_pricepage, 'a_pricecategory' => $a_pricecategory));
    }
}