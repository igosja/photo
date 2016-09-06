<?php

class m160906_172643_price extends CDbMigration
{
    public function up()
    {
        $this->createTable('price', array(
            'id' => 'pk',
            'name' => 'varchar(255) NOT NULL',
            'order' => 'int(11) DEFAULT 0',
            'price' => 'decimal(13,2) DEFAULT 0',
            'pricecategory_id' => 'int(11) DEFAULT 0',
            'status' => 'tinyint(1) DEFAULT 1',
            'text' => 'text NOT NULL',
        ));

        $this->createIndex('order', 'price', 'order');
        $this->createIndex('pricecategory_id', 'price', 'pricecategory_id');
        $this->createIndex('status', 'price', 'status');
    }

    public function down()
    {
        $this->dropTable('price');
    }
}