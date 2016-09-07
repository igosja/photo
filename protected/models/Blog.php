<?php

class Blog extends CActiveRecord
{
    public function tableName()
    {
        return 'blog';
    }

    public function rules()
    {
        return array(
            array('seo_title, name, url', 'length', 'max' => 255),
            array('name, text', 'required'),
            array('seo_description, seo_keywords', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'image_id' => 'Фото',
            'name' => 'Заголовок',
            'text' => 'Текст',
            'url' => 'ЧП-URL',
            'seo_description' => 'SEO description',
            'seo_keywords' => 'SEO keywords',
            'seo_title' => 'SEO title',
        );
    }

    public function beforeSave()
    {
        if (parent::beforeSave()) {
            if (!$this->date) {
                $this->date = time();
            }
        }
        return true;
    }

    public function relations()
    {
        return array(
            'image' => array(self::HAS_ONE, 'Image', array('id' => 'image_id')),
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
