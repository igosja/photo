<?php

class PortfolioController extends Controller
{
    public function actionIndex($id = '')
    {
        $o_category = PhotoCategory::model()->findByAttributes(array('url' => $id));
        if (null === $o_category) {
            $o_photo = PhotoPage::model()->findByPk(1);
            $this->setSEO($o_photo);
            $attributes = array('status' => 1);
        } else {
            $this->setSEO($o_category);
            $attributes = array('photocategory_id' => $o_category->id, 'status' => 1);
        }
        $this->breadcrumbs[] = array('url' => 'index/index', 'text' => 'Главная');
        $this->breadcrumbs[] = array('text' => 'Портфолио');
        $a_photocategory = PhotoCategory::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        $a_album = Album::model()->findAllByAttributes($attributes, array('order' => '`order`', 'limit' => 6));
        $this->render('index', array('a_photocategory' => $a_photocategory, 'a_album' => $a_album));
    }

    public function actionView($id)
    {
        $o_album = Album::model()->findByAttributes(array('url' => $id));
        if (null === $o_album) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $this->breadcrumbs[] = array('url' => 'index/index', 'text' => 'Главная');
        $this->breadcrumbs[] = array('url' => 'portfolio/index', 'text' => 'Портфолио');
        $this->breadcrumbs[] = array('text' => $o_album->name);
        $this->render('view', array('o_album' => $o_album));
    }
}