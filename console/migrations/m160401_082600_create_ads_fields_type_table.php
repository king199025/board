<?php

use yii\db\Migration;
use yii\db\Schema;

class m160401_082600_create_ads_fields_type_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('ads_fields_type', [
            'id'           => Schema::TYPE_PK,
            'type'   => Schema::TYPE_STRING . '(100) NOT NULL',
        ], $tableOptions);

        $this->insert('ads_fields_type', [
            'type' => 'checkbox',
        ]);

        $this->insert('ads_fields_type', [
            'type' => 'radio',
        ]);

        $this->insert('ads_fields_type', [
            'type' => 'text',
        ]);

        $this->insert('ads_fields_type', [
            'type' => 'select',
        ]);

        $this->insert('ads_fields_type', [
            'type' => 'textarea',
        ]);
    }

    public function down()
    {
        $this->dropTable('ads_fields_type');
    }
}
