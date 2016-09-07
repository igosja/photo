<?php

class m160907_104800_order extends CDbMigration
{
    public function up()
    {
        $this->createTable('order', array(
            'id' => 'pk',
            'date' => 'int(11) DEFAULT 0',
            'email' => 'varchar(255) NOT NULL',
            'name' => 'varchar(255) NOT NULL',
            'price' => 'varchar(255) NOT NULL',
            'tel' => 'varchar(255) NOT NULL',
            'text' => 'text NOT NULL',
            'status' => 'tinyint(1) DEFAULT 0',
        ));

        $this->createIndex('status', 'order', 'status');
    }

    public function down()
    {
        $this->dropTable('order');
    }
}