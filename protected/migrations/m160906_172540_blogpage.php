<?php

class m160906_172540_blogpage extends CDbMigration
{
    public function up()
    {
        $this->createTable('blogpage', array(
            'id' => 'pk',
            'seo_description' => 'text NOT NULL',
            'seo_keywords' => 'text NOT NULL',
            'seo_title' => 'varchar(255) NOT NULL',
        ));

        $this->insert('blogpage', array(
            'seo_description' => 'Блог',
            'seo_keywords' => 'Блог',
            'seo_title' => 'Блог',
        ));
    }

    public function down()
    {
        $this->dropTable('blogpage');
    }
}