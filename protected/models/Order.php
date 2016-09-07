<?php

class Order extends CActiveRecord
{
    public function tableName()
    {
        return 'order';
    }

    public function rules()
    {
        return array(
            array('email, name, price, tel', 'length', 'max' => 255),
            array('text', 'safe'),
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

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}