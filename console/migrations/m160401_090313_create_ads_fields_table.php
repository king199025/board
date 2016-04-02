<?php

use yii\db\Migration;
use yii\db\Schema;

class m160401_090313_create_ads_fields_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('ads_fields', [
            'id'                => Schema::TYPE_PK,
            'group_id'          => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'type_id'           => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'label'             => Schema::TYPE_STRING . '(255) NOT NULL'
        ], $tableOptions);

        $this->addForeignKey('ads_fields_group_ads_fields_fk', 'ads_fields', 'group_id', 'group_ads_fields', 'id', 'RESTRICT', 'CASCADE');
        $this->addForeignKey('ads_fields_ads_fields_type_fk', 'ads_fields', 'type_id', 'ads_fields_type','id', 'RESTRICT', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('ads_fields_ads_fields_type_fk', 'ads_fields');
        $this->dropForeignKey('ads_fields_group_ads_fields_fk', 'ads_fields');

        $this->dropTable('ads_fields');
    }
}
