<?php

class m160906_172533_blog extends CDbMigration
{
    public function up()
    {
        $this->createTable('blog', array(
            'id' => 'pk',
            'date' => 'int(11) DEFAULT 0',
            'image_id' => 'int(11) DEFAULT 0',
            'name' => 'varchar(255) NOT NULL',
            'status' => 'tinyint(1) DEFAULT 1',
            'text' => 'text NOT NULL',
            'url' => 'varchar(255) NOT NULL',
            'seo_description' => 'text NOT NULL',
            'seo_keywords' => 'text NOT NULL',
            'seo_title' => 'varchar(255) NOT NULL',
        ));

        $this->createIndex('image_id', 'blog', 'image_id');
        $this->createIndex('status', 'blog', 'status');
        $this->createIndex('url', 'blog', 'url');
    }

    public function down()
    {
        $this->dropTable('blog');
    }
}