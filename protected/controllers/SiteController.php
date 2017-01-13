<?php

class SiteController extends Controller
{
    public function actionLogin()
    {
        $model = new Login;
        if ($data = Yii::app()->request->getPost('Login')) {
            $username = $data['username'];
            $password = $data['password'];
            $identity = new UserIdentity($username, $password);
            if ($identity->authenticate()) {
                Yii::app()->user->login($identity);
                $this->redirect(array('admin/index'));
            } else {
                $model->error_login = 'Неправильная комбинация<br/>логин/пароль';
            }
        }
        $this->layout = 'login';
        $this->render('login', array('model' => $model));
    }

    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(array('site/login'));
    }

    public function actionOrder()
    {
        if ($data = Yii::app()->request->getPost('data')){
            $o_price = Price::model()->findByPk($data['price_id']);
            $o_order = new Order();
            $o_order->attributes = $data;
            $o_order->price = $o_price->category->name . ', ' . $o_price->name;
            $o_order->save();

            $mail = new Mail();
            $mail->setFrom('noreply@plakhotna.com.ua');
            $mail->setFromName('Заказ');
            $mail->setTo($this->contacts->email);
            $mail->setSubject('Новый заказ на сайте plakhotna.com.ua');
            $mail->setHtml('Вы получили новый заказ<br/>
                            Услуга - ' . $o_price->category->name . ', ' . $o_price->name . '<br/>
                            Имя клиента - ' . $data['name'] . '<br/>
                            Телефон - ' . $data['tel'] . '<br/>
                            Email - ' . $data['email'] . '<br/>
                            Комментарий к заказу - ' . $data['text']);
            $mail->send();
        }
    }

    public function actionAsk()
    {
        if ($data = Yii::app()->request->getPost('data')){
            $o_ask = new Ask();
            $o_ask->attributes = $data;
            $o_ask->save();

            $mail = new Mail();
            $mail->setFrom('noreply@plakhotna.com.ua');
            $mail->setFromName('Вопрос');
            $mail->setTo($this->contacts->email);
            $mail->setSubject('Новый вопрос на сайте plakhotna.com.ua');
            $mail->setHtml('Вы получили новый вопрос через форму "Пишите мне!"<br/>
                            Имя клиента - ' . $data['name'] . '<br/>
                            Телефон - ' . $data['tel'] . '<br/>
                            Email - ' . $data['email'] . '<br/>
                            Сообщение - ' . $data['text']);
            $mail->send();
        }
    }
}