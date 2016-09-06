<?php

class m160906_172605_mainpage extends CDbMigration
{
    public function up()
    {
        $this->createTable('mainpage', array(
            'id' => 'pk',
            'text' => 'text NOT NULL',
            'title' => 'varchar(255) NOT NULL',
            'seo_description' => 'text NOT NULL',
            'seo_keywords' => 'text NOT NULL',
            'seo_title' => 'varchar(255) NOT NULL',
        ));

        $this->insert('mainpage', array(
            'text' => 'Текст на главной. Очень интересный текст. И информативный.',
            'title' => 'Заголовок',
            'seo_description' => 'Студия Плахотной',
            'seo_keywords' => 'Студия Плахотной',
            'seo_title' => 'Студия Плахотной',
        ));
    }

    public function down()
    {
        $this->dropTable('mainpage');
    }
}