<?php

use yii\db\Migration;
use yii\db\Schema;

class m160401_093302_create_category_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('category', [
            'id'                => Schema::TYPE_PK,
            'name'              => Schema::TYPE_STRING . '(100) NOT NULL',
            'group_id'          => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'icon'              => Schema::TYPE_STRING . '(255) DEFAULT NULL',
            'slug'              => Schema::TYPE_STRING . '(255) DEFAULT NULL',
            'parent_id'         => Schema::TYPE_INTEGER . '(255) DEFAULT NULL',
            'description'       => Schema::TYPE_TEXT . ' DEFAULT NULL',
        ], $tableOptions);

        $this->addForeignKey('category_group_ads_fields_fk', 'category', 'group_id', 'group_ads_fields', 'id', 'RESTRICT', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('category_group_ads_fields_fk', 'category');

        $this->dropTable('category');
    }
}
