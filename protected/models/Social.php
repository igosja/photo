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
            array('css, url', 'length', 'max' => 255),
            array('url', 'url'),
            array('css, url', 'required'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'css' => 'Сss класс',
            'name' => 'Название',
            'url' => 'Ссылка',
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
