<?php

use yii\db\Migration;
use yii\db\Schema;

class m160401_102231_create_ads_img_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('ads_img', [
            'id'           => Schema::TYPE_PK,
            'ads_id'       => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'img'          => Schema::TYPE_STRING . '(255) NOT NULL'
        ], $tableOptions);

        $this->addForeignKey('ads_img_ads_fk', 'ads_img', 'ads_id', 'ads', 'id', 'RESTRICT', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('ads_img_ads_fk', 'ads_img');

        $this->dropTable('ads_img');
    }
}
