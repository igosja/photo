<?php

class OrderController extends AController
{
    public $h1 = 'Заказы';

    public function actionIndex()
    {
        $model = $this->getModel()->findAll(array('order' => 'status'));
        $this->render('index', array('model' => $model));
    }

    public function actionView($id)
    {
        $id = (int)$id;
        $model = $this->getModel()->findByPk($id);
        if (null === $model) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        if (0 == $model->status) {
            $model->status = 1;
            $model->save();
        }
        $this->render('view', array('model' => $model));
    }

    public function actionDelete($id)
    {
        $this->getModel()->deleteByPk($id);
        $this->redirect(array('index'));
    }

    public function getModel()
    {
        $model = new Order();
        return $model;
    }
}