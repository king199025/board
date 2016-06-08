<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `ads_fields_value_table`.
 */
class m160608_094239_create_ads_fields_value_table extends Migration
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

        $this->createTable('ads_fields_value', [
            'id'                    => Schema::TYPE_PK,
            'ads_id'                => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'ads_fields_id'         => Schema::TYPE_INTEGER . '(11) DEFAULT NULL',
            'value'                 => Schema::TYPE_STRING . '(255) DEFAULT NULL',
            'value_id'              => Schema::TYPE_INTEGER . '(11) DEFAULT NULL',
            'widgets_id'            => Schema::TYPE_INTEGER . '(11) DEFAULT NULL',
            'widgets_field_id'      => Schema::TYPE_INTEGER . '(11) DEFAULT NULL',
            'widgets_field_value'   => Schema::TYPE_STRING . '(255) DEFAULT NULL',
        ], $tableOptions);

        $this->addForeignKey('ads_fields_value_ads_fk', 'ads_fields_value', 'ads_id', 'ads', 'id', 'RESTRICT', 'CASCADE');
        $this->addForeignKey('ads_fields_value_ads_fields_fk', 'ads_fields_value', 'ads_fields_id', 'ads_fields', 'id', 'RESTRICT', 'CASCADE');
        $this->addForeignKey('ads_fields_value_ads_fields_default_value_fk', 'ads_fields_value', 'value_id', 'ads_fields_default_value', 'id', 'RESTRICT', 'CASCADE');

        $this->addForeignKey('ads_fields_value_widgets_fk', 'ads_fields_value', 'widgets_id', 'widgets', 'id', 'RESTRICT', 'CASCADE');
        $this->addForeignKey('ads_fields_value_widgets_field_fk', 'ads_fields_value', 'widgets_field_id', 'widgets_fields', 'id', 'RESTRICT', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('ads_fields_value_widgets_field_fk', 'ads_fields_value');
        $this->dropForeignKey('ads_fields_value_widgets_fk', 'ads_fields_value');
        $this->dropForeignKey('ads_fields_value_ads_fields_default_value_fk', 'ads_fields_value');
        $this->dropForeignKey('ads_fields_value_ads_fields_fk', 'ads_fields_value');
        $this->dropForeignKey('ads_fields_value_ads_fk', 'ads_fields_value');


        $this->dropTable('ads_fields_value');
    }
}
