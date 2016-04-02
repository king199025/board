<?php

use yii\db\Migration;
use yii\db\Schema;

class m160401_104521_create_ads_shop_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('ads_shop', [
            'id'           => Schema::TYPE_PK,
            'shop_id'      => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'ads_id'       => Schema::TYPE_INTEGER . '(11) NOT NULL'
        ], $tableOptions);

        $this->addForeignKey('ads_shop_shop_id_fk', 'ads_shop', 'shop_id', 'shop', 'id', 'RESTRICT', 'CASCADE');
        $this->addForeignKey('ads_shop_ads_id_fk', 'ads_shop', 'ads_id', 'ads', 'id', 'RESTRICT', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('ads_shop_shop_id_fk', 'ads_shop');
        $this->dropForeignKey('ads_shop_ads_id_fk', 'ads_shop');

        $this->dropTable('ads_shop');
    }
}
