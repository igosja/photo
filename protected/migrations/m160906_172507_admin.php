<?php

class m160906_172507_admin extends CDbMigration
{
    public function up()
    {
        $this->createTable('admin', array(
            'id' => 'pk',
            'username' => 'varchar(255) NOT NULL',
            'password' => 'varchar(32) NOT NULL',
        ));

        $this->insert('admin', array(
            'username' => 'admin',
            'password' => 'd82fab8155635f8238b7e8a63531df62',
        ));
    }

    public function down()
    {
        $this->dropTable('admin');
    }
}