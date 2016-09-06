<?php

class m160906_172617_photo extends CDbMigration
{
    public function up()
    {
        $this->createTable('photo', array(
            'id' => 'pk',
            'album_id' => 'int(11) DEFAULT 0',
            'alt' => 'varchar(255) NOT NULL',
            'image_id' => 'int(11) DEFAULT 0',
            'main' => 'tinyint(1) DEFAULT 0',
            'order' => 'int(11) DEFAULT 0',
            'status' => 'tinyint(1) DEFAULT 1',
        ));

        $this->createIndex('album_id', 'photo', 'album_id');
        $this->createIndex('image_id', 'photo', 'image_id');
        $this->createIndex('main', 'photo', 'main');
        $this->createIndex('order', 'photo', 'order');
        $this->createIndex('status', 'photo', 'status');
    }

    public function down()
    {
        $this->dropTable('photo');
    }
}