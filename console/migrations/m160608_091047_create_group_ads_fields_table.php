<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `group_ads_fields_table`.
 */
class m160608_091047_create_group_ads_fields_table extends Migration
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

        $this->createTable('group_ads_fields', [
            'id'               => Schema::TYPE_PK,
            'name'             => Schema::TYPE_STRING . '(100) NOT NULL',
            'widgets_id'       => Schema::TYPE_INTEGER . '(11) DEFAULT NULL'
        ], $tableOptions);

        $this->addForeignKey('group_ads_fields_widgets_fk', 'group_ads_fields', 'widgets_id', 'widgets', 'id', 'RESTRICT', 'CASCADE');

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey('group_ads_fields_widgets_fk', 'group_ads_fields');
        $this->dropTable('group_ads_fields');
    }
}
