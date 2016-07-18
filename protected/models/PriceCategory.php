<?php

class PriceCategory extends CActiveRecord
{
    public function tableName()
    {
        return 'pricecategory';
    }

    public function rules()
    {
        return array(
            array('name', 'length', 'max' => 255),
            array('name', 'required'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'name' => 'Название',
        );
    }

    public function relations()
    {
        return array(
            'price' => array(self::HAS_MANY, 'Price', array('pricecategory_id' => 'id')),
            'price_view' => array(self::HAS_MANY, 'Price', array('pricecategory_id' => 'id'), 'order' => '`order`', 'condition' => 'status=1'),
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
