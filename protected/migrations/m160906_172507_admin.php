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
            'password' => '3679163934587a4abafd80a44d0e318a',
        ));
    }

    public function down()
    {
        $this->dropTable('admin');
    }
}