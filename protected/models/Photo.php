<?php

class Photo extends CActiveRecord
{
    public function tableName()
    {
        return 'photo';
    }

    public function rules()
    {
        return array(
            array('alt', 'length', 'max' => 255),
        );
    }

    public function relations()
    {
        return array(
            'album' => array(self::HAS_ONE, 'Album', array('id' => 'album_id')),
            'image' => array(self::HAS_ONE, 'Image', array('id' => 'image_id')),
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
