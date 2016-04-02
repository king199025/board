<?php

use yii\db\Migration;
use yii\db\Schema;

class m160401_102652_create_ads_fields_value_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('ads_fields_value', [
            'id'            => Schema::TYPE_PK,
            'ads_id'        => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'ads_fields_id' => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'value'         => Schema::TYPE_STRING . '(255) NOT NULL',
        ], $tableOptions);

        $this->addForeignKey('ads_fields_value_ads_fk', 'ads_fields_value', 'ads_id', 'ads', 'id', 'RESTRICT', 'CASCADE');
        $this->addForeignKey('ads_fields_value_ads_fields_fk', 'ads_fields_value', 'ads_fields_id', 'ads_fields', 'id', 'RESTRICT', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('ads_fields_value_ads_fields_fk', 'ads_fields_value');
        $this->dropForeignKey('ads_fields_value_ads_fk', 'ads_fields_value');

        $this->dropTable('ads_fields_value');
    }
}
