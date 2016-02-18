<?php

use yii\db\Migration;
use yii\db\Schema;

class m160218_073039_collback_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('collback', [
            'id' => 'pk',
            'telephone' => Schema::TYPE_STRING,
            'email' => Schema::TYPE_STRING,
            'comment' => Schema::TYPE_STRING,
            'created_at' => Schema::TYPE_INTEGER,
            'updated_at' => Schema::TYPE_INTEGER,
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('collback');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
