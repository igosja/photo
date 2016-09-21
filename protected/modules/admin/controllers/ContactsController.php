<?php

class ContactsController extends AController
{
    public $h1 = 'Контакты';

    public function actionIndex()
    {
        $model = $this->getModel()->findByPk(1);
        $this->render('index', array('model' => $model));
    }

    public function actionUpdate($id)
    {
        $id = (int)$id;
        $model = $this->getModel()->findByPk($id);
        if ($data = Yii::app()->request->getPost('Contacts')) {
            $model->attributes = $data;
            if ($model->save()) {
                $this->uploadImage();
                $this->redirect(array('index'));
            }
        }
        $this->render('form', array('model' => $model));
    }

    public function actionImage($id)
    {
        $id = (int)$id;
        $o_image = Image::model()->findByPk($id);
        if (null === $o_image) {
            $this->redirect(array('index'));
            exit;
        }
        if (isset($o_image->url)) {
            if (file_exists($_SERVER['DOCUMENT_ROOT'] . $o_image->url)) {
                unlink($_SERVER['DOCUMENT_ROOT'] . $o_image->url);
            }
        }
        Image::model()->deleteByPk($id);
        $this->redirect(array('index'));
    }

    public function uploadImage()
    {
        if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
            $image = $_FILES['image'];
            $ext = $image['name'];
            $ext = explode('.', $ext);
            $ext = end($ext);
            $file = $image['tmp_name'];
            $image_url = ImageIgosja::put_file($file, $ext);
            $o_image = new Image();
            $o_image->url = $image_url;
            $o_image->save();
            $image_id = $o_image->id;
            $model = $this->getModel()->findByPk(1);
            $model->image_id = $image_id;
            $model->save();
        }
    }

    public function getModel()
    {
        $model = new Contacts();
        return $model;
    }
}