<?php

class AlbumController extends AController
{
    public $h1 = 'Альбомы';

    public function actionIndex()
    {
        $model = $this->getModel()->findAll(array('order' => '`order`'));
        $this->render('index', array('model' => $model));
    }

    public function actionUpdate($id)
    {
        $this->h1 = 'Редактирование прайса';
        $id = (int)$id;
        if (0 == $id) {
            $model = $this->getModel();
        } else {
            $model = $this->getModel()->findByPk($id);
            if (null === $model) {
                throw new CHttpException(404, 'Страница не найдена.');
            }
        }
        if ($data = Yii::app()->request->getPost('Album')) {
            $model->attributes = $data;
            if ($model->save()) {
                $model = $this->getModel()->findByPk($model->id);
                if (empty($model->url)) {
                    $model->url = $model->id . '-' . str_replace($this->rus, $this->lat, $model->name);
                    $model->save();
                }
                $this->uploadImage($model->id);
                if ($data = Yii::app()->request->getPost('alt')) {
                    foreach ($data as $key => $value) {
                        $id = (int)$key;
                        $photo = Photo::model()->findByPk($id);
                        $photo->alt = $value;
                        $photo->save();
                    }
                }
                if ($data = Yii::app()->request->getPost('photo-main')) {
                    $id = (int)$data;
                    Photo::model()->updateAll(array('main' => 0), 'album_id=' . $model->id);
                    Photo::model()->updateByPk($id, array('main' => 1));
                }
                $this->redirect(array('view', 'id' => $model->id));
            }
        }
        $this->render('form', array('model' => $model));
    }

    public function actionView($id)
    {
        $id = (int)$id;
        $model = $this->getModel()->findByPk($id);
        if (null === $model) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $this->h1 = $model->name;
        $this->render('view', array('model' => $model));
    }

    public function actionDelete($id)
    {
        $id = (int)$id;
        $a_photo = Photo::model()->findAllByAttributes(array('album_id' => $id));
        foreach ($a_photo as $item) {
            Photo::model()->deleteByPk($item->id);
            $o_image = Image::model()->findByPk($item->image_id);
            if (file_exists($_SERVER['DOCUMENT_ROOT'] . $o_image->url)) {
                unlink($_SERVER['DOCUMENT_ROOT'] . $o_image->url);
            }
            Image::model()->deleteByPk($item->image_id);
        }
        $this->getModel()->deleteByPk($id);
        $this->redirect(array('index'));
    }

    public function actionImage($id)
    {
        $id = (int)$id;
        $photo = Photo::model()->findByPk($id);
        if (null === $photo) {
            $this->redirect($_SERVER['HTTP_REFERER']);
            exit;
        }
        Photo::model()->deleteByPk($id);
        $o_image = Image::model()->findByPk($photo->image_id);
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . $o_image->url)) {
            unlink($_SERVER['DOCUMENT_ROOT'] . $o_image->url);
        }
        Image::model()->deleteByPk($id);
        $this->redirect($_SERVER['HTTP_REFERER']);
    }

    public function actionStatus($id)
    {
        $id = (int)$id;
        $model = $this->getModel()->findByPk($id);
        if (null === $model) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $this->getModel()->updateByPk($id, array('status' => 1 - $model->status));
        $this->redirect(array('index'));
    }

    public function actionOrder($id)
    {
        $id = (int)$id;
        $order_old = $_GET['order_old'];
        $order_new = $_GET['order_new'];
        $this->getModel()->updateByPk($id, array('order' => $order_new));
        if ($order_old < $order_new) {
            $a_model = $this->getModel()->findAll(array('condition' => '`order`>=' . $order_old . ' AND `order`<=' . $order_new . ' AND id!=' . $id));
            foreach ($a_model as $model) {
                $model->order--;
                $model->save();
            }
        } else {
            $a_model = $this->getModel()->findAll(array('condition' => '`order`<=' . $order_old . ' AND `order`>=' . $order_new . ' AND id!=' . $id));
            foreach ($a_model as $model) {
                $model->order++;
                $model->save();
            }
        }
    }

    public function uploadImage($id)
    {
        if (isset($_FILES['image']['name'][0]) && !empty($_FILES['image']['name'][0])) {
            $image = $_FILES['image'];
            for ($i = 0, $count_image = count($image['name']); $i < $count_image; $i++) {
                $ext = $image['name'][$i];
                $ext = explode('.', $ext);
                $ext = end($ext);
                $file = $image['tmp_name'][$i];
                $image_url = ImageIgosja::put_file($file, $ext);
                $o_image = new Image();
                $o_image->url = $image_url;
                $o_image->save();
                $image_id = $o_image->id;
                $o_photo = new Photo();
                $o_photo->image_id = $image_id;
                $o_photo->album_id = $id;
                $o_photo->save();
            }
        }
    }

    public function getModel()
    {
        $model = new Album();
        return $model;
    }
}