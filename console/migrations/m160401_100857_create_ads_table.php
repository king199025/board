<?php

use yii\db\Migration;
use yii\db\Schema;

class m160401_100857_create_ads_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('ads', [
            'id'            => Schema::TYPE_PK,
            'user_id'       => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'category_id'   => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'dt_add'        => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'dt_update'     => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'title'         => Schema::TYPE_STRING . '(255) NOT NULL',
            'content'       => Schema::TYPE_TEXT . ' NOT NULL',
            'slug'          => Schema::TYPE_STRING . '(255) DEFAULT NULL',
            'status'        => Schema::TYPE_INTEGER . '(2) DEFAULT 0',
            'views'         => Schema::TYPE_INTEGER . '(11) DEFAULT 0',
            'vip'           => Schema::TYPE_INTEGER . '(2) DEFAULT 0',
            'top'           => Schema::TYPE_INTEGER . '(2) DEFAULT 0',
            'cover'         => Schema::TYPE_STRING . '(255) NOT NULL',
        ], $tableOptions);

        $this->addForeignKey('ads_category_fk', 'ads', 'category_id', 'category', 'id', 'RESTRICT', 'CASCADE');
        $this->addForeignKey('ads_user_fk', 'ads', 'user_id', 'user', 'id', 'RESTRICT', 'CASCADE');

    }

    public function down()
    {
        $this->dropForeignKey('ads_user_fk', 'ads');
        $this->dropForeignKey('ads_category_fk', 'ads');

        $this->dropTable('ads');
    }
}
