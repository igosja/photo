<?php

class PhotoController extends Controller
{
    public function actionView($id)
    {
        $o_photo = Photo::model()->findByAttributes(array('id' => $id));
        if (null === $o_photo) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $this->setSEO($o_photo->album);
        $this->breadcrumbs[] = array('url' => 'index/index', 'text' => 'Главная');
        $this->breadcrumbs[] = array('url' => 'portfolio/index', 'text' => 'Портфолио');
        $this->breadcrumbs[] = array(
            'url' => $this->createUrl('portfolio/index', array('id' => $o_photo->album->category->url)),
            'text' => $o_photo->album->category->name
        );
        $this->breadcrumbs[] = array(
            'url' => $this->createUrl('portfolio/view', array('id' => $o_photo->album->url)),
            'text' => $o_photo->album->name
        );
        $this->breadcrumbs[] = array('text' => $o_photo->id);
        if (isset($o_photo->image->url)) {
            $this->og_image = ImageIgosja::resize($o_photo->image_id, 290, 290);
        }
        $this->render('view', array('o_photo' => $o_photo, 'id' => $id));
    }
}