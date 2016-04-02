<?php

use yii\db\Migration;
use yii\db\Schema;

class m160401_084746_create_group_ads_fields_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('group_ads_fields', [
            'id'               => Schema::TYPE_PK,
            'name'             => Schema::TYPE_STRING . '(100) NOT NULL',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('group_ads_fields');
    }
}
