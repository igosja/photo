<?php

class BlogController extends AController
{
    public $h1 = 'Публикации';
    
    public function actionIndex()
    {
        $criteria = new CDbCriteria();
        $criteria->order = 'id DESC';
        $count = $this->getModel()->count($criteria);
        $pages = new CPagination($count);
        $pages->pageSize = 20;
        $pages->applyLimit($criteria);
        $search = array();
        if (isset($_GET['search'])) {
            $search = array_filter($_GET['search']);
        }
        $model = $this->getModel();
        foreach ($search as $key => $value) {
            $criteria->addSearchCondition($key, '%'. $value .'%', false);
        }
        $model = $model->findAll($criteria);
        $this->render('index', array('model' => $model, 'pages' => $pages));
    }

    public function actionUpdate($id)
    {
        $this->h1 = 'Редактирование публикации';
        $id = (int) $id;
        if (0 == $id) {
            $model = $this->getModel();
        } else {
            $model = $this->getModel()->findByPk($id);
            if (null === $model) {
                throw new CHttpException(404, 'Страница не найдена.');
            }
        }
        if ($data = Yii::app()->request->getPost('Blog')) {
            $model->attributes = $data;
            if (0 == $id) {
                $model->date = time();
            }
            if($model->save()) {
                $model = $this->getModel()->findByPk($model->id);
                if (empty($model->url)) {
                    $model->url = $model->id . '-' . str_replace($this->rus, $this->lat, $model->name);
                    $model->save();
                }
                $this->uploadImage($model->id);
                $this->redirect(array('view', 'id' => $model->id));
            }
        }
        $this->render('form', array('model' => $model));
    }

    public function actionView($id)
    {
        $id = (int) $id;
        $model = $this->getModel()->findByPk($id);
        if (null === $model) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $this->h1 = $model->name;
        $this->render('view', array('model' => $model));
    }

    public function actionStatus($id)
    {
        $id = (int) $id;
        $model = $this->getModel()->findByPk($id);
        if (null === $model) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $model = $this->getModel()->updateByPk($id, array('status' => 1 - $model->status));
        $this->redirect(array('index'));
    }

    public function actionDelete($id)
    {
        $model = $this->getModel()->findByPk($id);
        $model->deleteByPk($id);
        if (0 < $model->image_id) {
            $o_image = Image::model()->findByPk($model->image_id);
            if (file_exists($_SERVER['DOCUMENT_ROOT'] . $o_image->url)) {
                unlink($_SERVER['DOCUMENT_ROOT'] . $o_image->url);
            }
        }
        $this->redirect(array('index'));
    }

    public function actionImage($id)
    {
        $o_image = Image::model()->findByPk($id);
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . $o_image->url)) {
            unlink($_SERVER['DOCUMENT_ROOT'] . $o_image->url);
        }
        Image::model()->deleteByPk($id);
        $this->redirect($_SERVER['HTTP_REFERER']);
    }

    public function uploadImage($id)
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
            $model = $this->getModel()->findByPk($id);
            $model->image_id = $image_id;
            $model->save();
        }
    }

    public function getModel()
    {
        $model = new Blog();
        return $model;
    }
}