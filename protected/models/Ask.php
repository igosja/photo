<?php

class Ask extends CActiveRecord
{
    public function tableName()
    {
        return 'ask';
    }

    public function rules()
    {
        return array(
            array('email, name, tel', 'length', 'max' => 255),
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