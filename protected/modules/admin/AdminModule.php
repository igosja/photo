<?php

class AdminModule extends CWebModule
{
    public function init()
    {
        $this->setImport(array(
            'admin.models.*',
            'admin.components.*',
        ));
        $this->layoutPath = Yii::getPathOfAlias('admin.views.layouts');
        $this->layout = 'main';
    }

    public function beforeControllerAction($controller, $action)
    {
        $this->layoutPath = Yii::getPathOfAlias('admin.views.layouts');
        $this->layout = 'main';
        if (parent::beforeControllerAction($controller, $action)) {
            return true;
        } else {
            return false;
        }
    }
}
