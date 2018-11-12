<?php

use yii\db\Migration;

/**
 * Class m181105_201748_alter_subservice_items_add_columns
 */
class m181105_201748_alter_subservice_items_add_columns extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('subservice_items', 'is_main', 'BOOLEAN DEFAULT FALSE');
        $this->addColumn('subservice_items', 'enabled', 'BOOLEAN DEFAULT TRUE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('subservice_items', 'is_main');
        $this->dropColumn('subservice_items', 'enabled');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181105_201748_alter_subservice_items_add_columns cannot be reverted.\n";

        return false;
    }
    */
}
