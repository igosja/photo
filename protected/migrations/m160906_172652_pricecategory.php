<?php

class m160906_172652_pricecategory extends CDbMigration
{
    public function up()
    {
        $this->createTable('pricecategory', array(
            'id' => 'pk',
            'name' => 'varchar(255) NOT NULL',
            'order' => 'int(11) DEFAULT 0',
            'status' => 'tinyint(1) DEFAULT 1',
        ));

        $this->createIndex('order', 'pricecategory', 'order');
        $this->createIndex('status', 'pricecategory', 'status');
    }

    public function down()
    {
        $this->dropTable('pricecategory');
    }
}