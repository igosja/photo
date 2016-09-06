<?php

class m160906_172636_photopage extends CDbMigration
{
    public function up()
    {
        $this->createTable('photopage', array(
            'id' => 'pk',
            'seo_description' => 'text NOT NULL',
            'seo_keywords' => 'text NOT NULL',
            'seo_title' => 'varchar(255) NOT NULL',
        ));

        $this->insert('photopage', array(
            'seo_description' => 'Портфолио',
            'seo_keywords' => 'Портфолио',
            'seo_title' => 'Портфолио',
        ));
    }

    public function down()
    {
        $this->dropTable('photopage');
    }
}