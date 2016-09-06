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
    }

    public function down()
    {
        $this->dropTable('admin');
    }
}