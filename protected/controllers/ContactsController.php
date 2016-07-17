<?php

class ContactsController extends Controller
{
    public function actionIndex()
    {
        $o_contacts = Contacts::model()->findByPk(1);
        $this->setSEO($o_contacts);
        $this->breadcrumbs[] = array('url' => 'index/index', 'text' => 'Главная');
        $this->breadcrumbs[] = array('text' => 'Контакты');
        $this->render('index');
    }
}