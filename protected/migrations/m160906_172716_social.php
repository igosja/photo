<?php

class m160906_172716_social extends CDbMigration
{
    public function up()
    {
        $this->createTable('social', array(
            'id' => 'pk',
            'css' => 'varchar(255) NOT NULL',
            'name' => 'varchar(255) NOT NULL',
            'order' => 'int(11) DEFAULT 0',
            'status' => 'tinyint(1) DEFAULT 1',
            'url' => 'varchar(255) NOT NULL',
        ));

        $this->createIndex('order', 'social', 'order');
        $this->createIndex('status', 'social', 'status');

        $this->insert('social', array(
            'css' => 'fb',
            'name' => 'facebook',
            'order' => '0',
            'status' => '1',
            'url' => 'https://www.facebook.com/',
        ));

        $this->insert('social', array(
            'css' => 'vk',
            'name' => 'vk',
            'order' => '3',
            'status' => '1',
            'url' => 'http://vk.com/',
        ));

        $this->insert('social', array(
            'css' => 'ins',
            'name' => 'instagram',
            'order' => '1',
            'status' => '1',
            'url' => 'https://www.instagram.com/',
        ));

        $this->insert('social', array(
            'css' => 'pin',
            'name' => 'pinterest',
            'order' => '2',
            'status' => '1',
            'url' => 'https://ru.pinterest.com/',
        ));
    }

    public function down()
    {
        $this->dropTable('mainpage');
    }
}