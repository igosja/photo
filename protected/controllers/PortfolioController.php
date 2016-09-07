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
        if (!empty($id)) {
            $this->breadcrumbs[] = array('url' => 'portfolio/index', 'text' => $o_category->name);
            $this->breadcrumbs[] = array('text' => $o_category->name);
        } else {
            $this->breadcrumbs[] = array('text' => 'Портфолио');
        }
        $a_photocategory = PhotoCategory::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        $a_album = Album::model()->findAllByAttributes($attributes, array('order' => '`order`', 'limit' => 6));
        $this->render('index', array('a_photocategory' => $a_photocategory, 'a_album' => $a_album, 'id' => $id));
    }

    public function actionView($id)
    {
        $o_album = Album::model()->findByAttributes(array('url' => $id));
        if (null === $o_album) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $a_photo = Photo::model()->findAllByAttributes(
            array('album_id' => $o_album->id, 'status' => 1),
            array('order' => '`order`', 'limit' => 9)
        );
        $this->breadcrumbs[] = array('url' => 'index/index', 'text' => 'Главная');
        $this->breadcrumbs[] = array('url' => 'portfolio/index', 'text' => 'Портфолио');
        $this->breadcrumbs[] = array(
            'url' => $this->createUrl('portfolio/index', array('id' => $o_album->category->url)),
            'text' => $o_album->category->name
        );
        $this->breadcrumbs[] = array('text' => $o_album->name);
        $this->render('view', array('o_album' => $o_album, 'a_photo' => $a_photo, 'id' => $id));
    }

    public function actionAjaxindex($id = '')
    {
        $page = (int)Yii::app()->request->getQuery('page');
        $offset = $page * 6;
        $o_category = PhotoCategory::model()->findByAttributes(array('url' => $id));
        if (null === $o_category) {
            $o_photo = PhotoPage::model()->findByPk(1);
            $this->setSEO($o_photo);
            $attributes = array('status' => 1);
        } else {
            $this->setSEO($o_category);
            $attributes = array('photocategory_id' => $o_category->id, 'status' => 1);
        }
        $a_album = Album::model()->findAllByAttributes(
            $attributes,
            array('order' => '`order`', 'limit' => 6, 'offset' => $offset)
        );
        $this->layout = 'empty';
        $this->render('ajaxindex', array('a_album' => $a_album));
    }

    public function actionAjaxview($id)
    {
        $page = (int)Yii::app()->request->getQuery('page');
        $offset = $page * 9;
        $o_album = Album::model()->findByAttributes(array('url' => $id));
        $a_photo = Photo::model()->findAllByAttributes(
            array('album_id' => $o_album->id, 'status' => 1),
            array('order' => '`order`', 'limit' => 9, 'offset' => $offset)
        );
        $this->layout = 'empty';
        $this->render('ajaxview', array('a_photo' => $a_photo));
    }
}