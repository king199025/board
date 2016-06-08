<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `ads_img_table`.
 */
class m160608_094126_create_ads_img_table extends Migration
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

        $this->createTable('ads_img', [
            'id'           => Schema::TYPE_PK,
            'ads_id'       => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'img'          => Schema::TYPE_STRING . '(255) NOT NULL',
            'img_thumb'    => Schema::TYPE_STRING . '(255) NOT NULL'
        ], $tableOptions);

        $this->addForeignKey('ads_img_ads_fk', 'ads_img', 'ads_id', 'ads', 'id', 'RESTRICT', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('ads_img_ads_fk', 'ads_img');

        $this->dropTable('ads_img');
    }
}
