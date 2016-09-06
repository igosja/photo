<?php

class m160906_172629_photocategory extends CDbMigration
{
    public function up()
    {
        $this->createTable('photocategory', array(
            'id' => 'pk',
            'name' => 'varchar(255) NOT NULL',
            'order' => 'int(11) DEFAULT 0',
            'status' => 'tinyint(1) DEFAULT 1',
            'url' => 'varchar(255) NOT NULL',
            'seo_description' => 'text NOT NULL',
            'seo_keywords' => 'text NOT NULL',
            'seo_title' => 'varchar(255) NOT NULL',
        ));

        $this->createIndex('order', 'photocategory', 'order');
        $this->createIndex('status', 'photocategory', 'status');
        $this->createIndex('url', 'photocategory', 'url');
    }

    public function down()
    {
        $this->dropTable('photocategory');
    }
}