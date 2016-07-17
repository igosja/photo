<?php

class PriceController extends AController
{
    public $h1 = 'Прайсы';

    public function actionIndex()
    {
        $model = $this->getModel()->findAll(array('order' => '`order`'));
        $this->render('index', array('model' => $model));
    }

    public function actionUpdate($id)
    {
        $this->h1 = 'Редактирование прайса';
        $id = (int) $id;
        if (0 == $id) {
            $model = $this->getModel();
        } else {
            $model = $this->getModel()->findByPk($id);
            if (null === $model) {
                throw new CHttpException(404, 'Страница не найдена.');
            }
        }
        if ($data = Yii::app()->request->getPost('Price')) {
            $model->attributes = $data;
            if($model->save()) {
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

    public function actionDelete($id)
    {
        $model = $this->getModel()->deleteByPk($id);
        $this->redirect(array('index'));
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

    public function actionOrder($id)
    {
        $id = (int) $id;
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
        $model = new Price();
        return $model;
    }
}