<?php

class m160906_172557_image extends CDbMigration
{
    public function up()
    {
        $this->createTable('image', array(
            'id' => 'pk',
            'url' => 'varchar(255) NOT NULL',
        ));
    }

    public function down()
    {
        $this->dropTable('image');
    }
}