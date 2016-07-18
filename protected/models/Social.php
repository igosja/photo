<?php

class Social extends CActiveRecord
{
    public function tableName()
    {
        return 'social';
    }

    public function rules()
    {
        return array(
            array('url', 'length', 'max' => 255),
            array('url', 'url'),
            array('url', 'required'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'url' => 'Ссылка',
            'name' => 'Название',
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
