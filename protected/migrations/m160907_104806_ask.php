<?php

class m160907_104806_ask extends CDbMigration
{
    public function up()
    {
        $this->createTable('ask', array(
            'id' => 'pk',
            'date' => 'int(11) DEFAULT 0',
            'email' => 'varchar(255) NOT NULL',
            'name' => 'varchar(255) NOT NULL',
            'tel' => 'varchar(255) NOT NULL',
            'text' => 'text NOT NULL',
            'status' => 'tinyint(1) DEFAULT 0',
        ));

        $this->createIndex('status', 'ask', 'status');
    }

    public function down()
    {
        $this->dropTable('ask');
    }
}