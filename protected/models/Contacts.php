<?php

class Contacts extends CActiveRecord
{
    public function tableName()
    {
        return 'contacts';
    }

    public function rules()
    {
        return array(
            array('lifecell, kyivstar, email', 'required'),
            array('lifecell, kyivstar', 'numerical'),
            array('lifecell, kyivstar', 'length', 'max' => 10),
            array('email', 'email'),
            array('seo_title', 'length', 'max' => 255),
            array('seo_description, seo_keywords', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'email' => 'Email',
            'image_id' => 'Изображение',
            'kyivstar' => 'Киевстар',
            'lifecell' => 'Lifecell',
            'seo_description' => 'SEO description',
            'seo_keywords' => 'SEO keywords',
            'seo_title' => 'SEO title',
        );
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
