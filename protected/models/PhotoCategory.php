<?php

class PhotoCategory extends CActiveRecord
{
    public function tableName()
    {
        return 'photocategory';
    }

    public function rules()
    {
        return array(
            array('name, seo_title, url', 'length', 'max' => 255),
            array('seo_description, seo_keywords', 'safe'),
            array('name', 'required'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'name' => 'Название',
            'url' => 'ЧП-URL',
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
