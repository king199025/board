<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `widgets_fields_table`.
 */
class m160608_090544_create_widgets_fields_table extends Migration
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

        $this->createTable('widgets_fields', [
            'id'           => Schema::TYPE_PK,
            'widgets_id'   => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'label'   => Schema::TYPE_STRING . '(255) NOT NULL',
            'name'   => Schema::TYPE_STRING . '(255) NOT NULL',
        ], $tableOptions);

        $this->addForeignKey('widgets_fields_widgets_fk', 'widgets_fields', 'widgets_id', 'widgets', 'id', 'RESTRICT', 'CASCADE');

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey('widgets_fields_widgets_fk', 'widgets_fields');
        $this->dropTable('widgets_fields');
    }
}
