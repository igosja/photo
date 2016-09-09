<?php

class Controller extends CController
{
    public $seo_title;
    public $seo_description;
    public $seo_keywords;
    public $layout = 'main';
    public $menu = array();
    public $breadcrumbs = array();
    public $a_price;
    public $a_social;
    public $contacts;
    public $og_image;

    public function init()
    {
        $this->a_price = Price::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        $this->a_social = Social::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        $this->contacts = Contacts::model()->findByPk(1);
    }

    public function setSEO($model)
    {
        $this->seo_title = $model->seo_title;
        $this->seo_description = $model->seo_description;
        $this->seo_keywords = $model->seo_keywords;
        if (empty($this->seo_title) && isset($model->name)) {
            $this->seo_title = $model->name;
        }
        if (empty($this->seo_description) && isset($model->name)) {
            $this->seo_description = $model->name;
        }
        if (empty($this->seo_keywords) && isset($model->name)) {
            $this->seo_keywords = $model->name;
        }
    }
}