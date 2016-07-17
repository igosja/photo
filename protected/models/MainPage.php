<?php

class MainPage extends CActiveRecord
{
    public function tableName()
    {
        return 'mainpage';
    }

    public function rules()
    {
        return array(
            array('text', 'required'),
            array('seo_title', 'length', 'max'=>255),
            array('seo_description, seo_keywords', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'text' => 'Текст',
            'seo_description' => 'SEO description',
            'seo_keywords' => 'SEO keywords',
            'seo_title' => 'SEO title',
        );
    }

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
