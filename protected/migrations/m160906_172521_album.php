<?php

class m160906_172521_album extends CDbMigration
{
    public function up()
    {
        $this->createTable('album', array(
            'id' => 'pk',
            'name' => 'varchar(255) NOT NULL',
            'order' => 'int(11) DEFAULT 0',
            'photocategory_id' => 'int(11) DEFAULT 0',
            'status' => 'tinyint(1) DEFAULT 1',
            'url' => 'varchar(255) NOT NULL',
            'seo_description' => 'text NOT NULL',
            'seo_keywords' => 'text NOT NULL',
            'seo_title' => 'varchar(255) NOT NULL',
        ));

        $this->createIndex('order', 'album', 'order');
        $this->createIndex('photocategory_id', 'album', 'photocategory_id');
        $this->createIndex('status', 'album', 'status');
        $this->createIndex('url', 'album', 'url');
    }

    public function down()
    {
        $this->dropTable('album');
    }
}