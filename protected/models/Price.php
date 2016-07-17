<?php

class Price extends CActiveRecord
{
    public function tableName()
    {
        return 'price';
    }

    public function rules()
    {
        return array(
            array('name', 'length', 'max' => 255),
            array('price, pricecategory_id', 'numerical'),
            array('name, text, price, pricecategory_id', 'required'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'name' => 'Название',
            'pricecategory_id' => 'Категория',
            'price' => 'Цена, грн',
            'text' => 'Описание',
        );
    }

    public function relations()
    {
        return array(
            'category' => array(self::HAS_ONE, 'PriceCategory', array('id' => 'pricecategory_id')),
        );
    }

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
