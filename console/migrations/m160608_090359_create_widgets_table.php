<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `widgets_table`.
 */
class m160608_090359_create_widgets_table extends Migration
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

        $this->createTable('widgets', [
            'id'           => Schema::TYPE_PK,
            'name'   => Schema::TYPE_STRING . '(100) NOT NULL',
            'slug'   => Schema::TYPE_STRING . '(255) NOT NULL',
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('widgets');
    }
}
