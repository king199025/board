<?php

use yii\db\Migration;
use yii\db\Schema;

class m160401_103522_create_shop_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('shop', [
            'id'            => Schema::TYPE_PK,
            'user_id'       => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'title'         => Schema::TYPE_STRING . '(255) NOT NULL',
            'description'   => Schema::TYPE_TEXT . ' NOT NULL',
            'logo'          => Schema::TYPE_STRING . '(255) DEFAULT NULL',
            'site'          => Schema::TYPE_STRING . '(255) DEFAULT NULL',
            'dt_add'        => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'dt_update'     => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'status'        => Schema::TYPE_INTEGER . '(2) NOT NULL',
            'vip'           => Schema::TYPE_INTEGER . '(2) DEFAULT 0',
            'top'           => Schema::TYPE_INTEGER . '(2) DEFAULT 0',
            'views'         => Schema::TYPE_INTEGER . '(11) DEFAULT 0',
            'header_img'    => Schema::TYPE_STRING . '(255) DEFAULT NULL',
            'footer_img'    => Schema::TYPE_STRING . '(255) DEFAULT NULL',
            'bg_color'      => Schema::TYPE_STRING . '(255) DEFAULT NULL',
        ], $tableOptions);

        $this->addForeignKey('shop_user_fk', 'shop', 'user_id', 'user', 'id', 'RESTRICT', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('shop_user_fk', 'shop');
        $this->dropTable('shop');
    }
}
