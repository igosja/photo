<?php

class Album extends CActiveRecord
{
    public function tableName()
    {
        return 'album';
    }

    public function rules()
    {
        return array(
            array('seo_title, name, url', 'length', 'max' => 255),
            array('photocategory_id', 'numerical'),
            array('name, photocategory_id', 'required'),
            array('seo_description, seo_keywords', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'name' => 'Название',
            'url' => 'ЧП-URL',
            'photocategory_id' => 'Категория',
            'seo_description' => 'SEO description',
            'seo_keywords' => 'SEO keywords',
            'seo_title' => 'SEO title',
        );
    }

    public function relations()
    {
        return array(
            'photo' => array(self::HAS_MANY, 'Photo', array('album_id' => 'id')),
            'category' => array(self::HAS_ONE, 'PhotoCategory', array('id' => 'photocategory_id')),
        );
    }

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
