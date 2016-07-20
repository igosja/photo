<?php

class PhotocategoryController extends AController
{
    public $h1 = 'Категории альбомов';

    public function actionIndex()
    {
        $model = $this->getModel()->findAll(array('order' => '`order`'));
        $this->render('index', array('model' => $model));
    }

    public function actionUpdate($id)
    {
        $this->h1 = 'Редактирование категории';
        $id = (int)$id;
        if (0 == $id) {
            $model = $this->getModel();
        } else {
            $model = $this->getModel()->findByPk($id);
            if (null === $model) {
                throw new CHttpException(404, 'Страница не найдена.');
            }
        }
        if ($data = Yii::app()->request->getPost('PhotoCategory')) {
            $model->attributes = $data;
            if ($model->save()) {
                $model = $this->getModel()->findByPk($model->id);
                if (empty($model->url)) {
                    $model->url = $model->id . '-' . str_replace($this->rus, $this->lat, $model->name);
                    $model->save();
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
        $model = $this->getModel()->findByPk($id);
        $model->deleteByPk($id);
        Price::model()->deleteAllByAttributes(array('pricecategory' => $id));
        $this->redirect(array('index'));
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

    public function getModel()
    {
        $model = new PhotoCategory();
        return $model;
    }
}