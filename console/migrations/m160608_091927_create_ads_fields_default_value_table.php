<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `ads_fields_default_value_table`.
 */
class m160608_091927_create_ads_fields_default_value_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('ads_fields_default_value', [
            'id'                => Schema::TYPE_PK,
            'value'             => Schema::TYPE_STRING . '(255) NOT NULL',
            'ads_field_id' => Schema::TYPE_INTEGER . '(11) NOT NULL'
        ], $tableOptions);

        $this->addForeignKey('ads_fields_default_value_ads_fields_fk', 'ads_fields_default_value', 'ads_field_id', 'ads_fields', 'id', 'RESTRICT', 'CASCADE');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey('ads_fields_default_value_ads_fields_fk', 'ads_fields_default_value');

        $this->dropTable('ads_fields_default_value');
    }
}
