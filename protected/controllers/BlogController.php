<?php

class BlogController extends Controller
{
    public function actionIndex()
    {
        $o_blog = BlogPage::model()->findByPk(1);
        $this->setSEO($o_blog);
        $this->breadcrumbs[] = array('url' => 'index/index', 'text' => 'Главная');
        $this->breadcrumbs[] = array('text' => 'Блог');
        $a_blog = Blog::model()->findAllByAttributes(array('status' => 1), array('order'=>'id DESC', 'limit' => 3));
        $this->render('index', array('a_blog' => $a_blog));
    }

    public function actionView($id)
    {
        $o_blog = Blog::model()->findByAttributes(array('url' => $id));
        if (null === $o_blog) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $this->setSEO($o_blog);
        $this->breadcrumbs[] = array('url' => 'index/index', 'text' => 'Главная');
        $this->breadcrumbs[] = array('url' => 'blog/index', 'text' => 'Блог');
        $this->breadcrumbs[] = array('text' => $o_blog->name);
        $this->render('view', array('o_blog' => $o_blog));
    }
}