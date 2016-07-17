<?php

class Image extends CActiveRecord
{
    public function tableName()
    {
        return 'image';
    }

    public function beforeDelete()
    {
        $a_resize = ResizeModel::model()->findAllByAttributes(array('resize_image_id' => $this->id));
        foreach ($a_resize as $item) {
            if (file_exists($_SERVER['DOCUMENT_ROOT'] . $item->url)) {
                unlink($_SERVER['DOCUMENT_ROOT'] . $item->url);
            }
        }
        ResizeModel::model()->deleteAllByAttributes(array('image_id' => $this->id));
        return parent::beforeDelete();
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}