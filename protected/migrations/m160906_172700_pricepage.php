<?php

class m160906_172700_pricepage extends CDbMigration
{
    public function up()
    {
        $this->createTable('pricepage', array(
            'id' => 'pk',
            'text' => 'text NOT NULL',
            'seo_description' => 'text NOT NULL',
            'seo_keywords' => 'text NOT NULL',
            'seo_title' => 'varchar(255) NOT NULL',
        ));

        $this->insert('pricepage', array(
            'text' => 'Текст в прайсах',
            'seo_description' => 'Прайсы',
            'seo_keywords' => 'Прайсы',
            'seo_title' => 'Прайсы',
        ));
    }

    public function down()
    {
        $this->dropTable('pricepage');
    }
}