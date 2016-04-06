<?php

use yii\db\Migration;

class m160405_071207_add_column_template_table_ads_fields extends Migration
{
    public function up()
    {
        $this->addColumn('ads_fields', 'template', \yii\db\Schema::TYPE_TEXT . ' DEFAULT NULL');
    }

    public function down()
    {
        $this->dropColumn('ads_fields', 'template');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
