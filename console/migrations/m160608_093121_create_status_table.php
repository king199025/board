<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `status_table`.
 */
class m160608_093121_create_status_table extends Migration
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

        $this->createTable('status', [
            'id'                => Schema::TYPE_PK,
            'name'              => Schema::TYPE_STRING . '(100) NOT NULL',
            'icon'              => Schema::TYPE_STRING . '(255) DEFAULT NULL',
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('status');
    }
}
