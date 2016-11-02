<?php

class m161102_064219_price extends CDbMigration
{
    public function up()
    {
        $this->alterColumn('price', 'price', 'int(11) DEFAULT 0');
    }

    public function down()
    {
        $this->alterColumn('price', 'price', 'decimal(13,2) DEFAULT 0');
    }
}