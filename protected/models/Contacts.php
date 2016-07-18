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
            array('email', 'email'),
            array('seo_title', 'length', 'max' => 255),
            array('seo_description, seo_keywords', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'lifecell' => 'Lifecell',
            'kyivstar' => 'Киевстар',
            'email' => 'Email',
            'seo_description' => 'SEO description',
            'seo_keywords' => 'SEO keywords',
            'seo_title' => 'SEO title',
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
