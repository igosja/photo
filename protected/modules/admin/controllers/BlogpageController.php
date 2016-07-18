<?php

class BlogpageController extends AController
{
    public $h1 = 'Блог - SEO';

    public function actionIndex()
    {
        $model = $this->getModel()->findByPk(1);
        $this->render('index', array('model' => $model));
    }

    public function actionUpdate($id)
    {
        $id = (int)$id;
        $model = $this->getModel()->findByPk($id);
        if ($data = Yii::app()->request->getPost('BlogPage')) {
            $model->attributes = $data;
            if ($model->save()) {
                $this->redirect(array('index'));
            }
        }
        $this->render('form', array('model' => $model));
    }

    public function getModel()
    {
        $model = new BlogPage();
        return $model;
    }
}