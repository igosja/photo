<?php

class m160906_172548_contacts extends CDbMigration
{
    public function up()
    {
        $this->createTable('contacts', array(
            'id' => 'pk',
            'email' => 'varchar(255) NOT NULL',
            'kyivstar' => 'varchar(255) NOT NULL',
            'lifecell' => 'varchar(255) NOT NULL',
            'seo_description' => 'text NOT NULL',
            'seo_keywords' => 'text NOT NULL',
            'seo_title' => 'varchar(255) NOT NULL',
        ));

        $this->insert('contacts', array(
            'email' => 'test@test.test',
            'kyivstar' => '+380',
            'lifecell' => '+380',
            'seo_description' => 'Контакты',
            'seo_keywords' => 'Контакты',
            'seo_title' => 'Контакты',
        ));
    }

    public function down()
    {
        $this->dropTable('contacts');
    }
}