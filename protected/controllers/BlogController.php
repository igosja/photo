<?php

class BlogController extends Controller
{
    public function actionIndex($id = 1)
    {
        $on_page = 6;
        $offset = ($id - 1) * $on_page;
        $o_blog = BlogPage::model()->findByPk(1);
        $this->setSEO($o_blog);
        $this->breadcrumbs[] = array('url' => 'index/index', 'text' => 'Главная');
        $this->breadcrumbs[] = array('text' => 'Блог');
        $a_blog = Blog::model()->findAllByAttributes(
            array('status' => 1),
            array('order' => 'id DESC', 'limit' => $on_page, 'offset' => $offset)
        );
        $count = Blog::model()->countByAttributes(array('status' => 1));
        $a_page = ceil($count / $on_page);
        $prev = ($id - 1 > 0 ? $id - 1 : 1);
        $next = ($id + 1 <= $a_page ? $id + 1 : $a_page);
        $this->render('index', array(
            'a_blog' => $a_blog,
            'a_page' => $a_page,
            'page' => $id,
            'prev' => $prev,
            'next' => $next
        ));
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
        $prev = Blog::model()->find(array('condition' => 'id<' . $o_blog->id, 'order' => 'id DESC'));
        $next = Blog::model()->find(array('condition' => 'id>' . $o_blog->id, 'order' => 'id'));
        $this->render('view', array('o_blog' => $o_blog, 'prev' => $prev, 'next' => $next));
    }
}