<?php

class Slide extends CActiveRecord
{
    public function tableName()
    {
        return 'slide';
    }

    public function rules()
    {
        return array(
            array('image_id', 'numerical'),
            array('image_id', 'required'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'image_id' => 'Изображение',
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
