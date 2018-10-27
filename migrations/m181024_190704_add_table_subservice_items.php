<?php

use yii\db\Migration;

/**
 * Class m181024_190704_add_table_subservices
 */
class m181024_190704_add_table_subservice_items extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('subservice_items', [
            'id' => 'pk',
            'service_id' => 'INTEGER NOT NULL REFERENCES service_items (id) ON UPDATE CASCADE ON DELETE CASCADE',
            'title' => 'VARCHAR(150)',
            'price' => 'VARCHAR(20)'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('subservice_items');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181024_190704_add_table_subservices cannot be reverted.\n";

        return false;
    }
    */
}
