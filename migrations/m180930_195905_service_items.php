<?php

use yii\db\Migration;

/**
 * Class m180930_195905_service_items
 */
class m180930_195905_service_items extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('service_items', [
        'id' => 'pk',
        'slug' => 'VARCHAR(50) NOT NULL UNIQUE',
        'title' => 'VARCHAR(50) NOT NULL',
        'enabled' => 'BOOLEAN DEFAULT TRUE',
        'comment' => 'VARCHAR(250) DEFAULT NULL',
        'icon' => 'VARCHAR(250) DEFAULT NULL',
        'seo_keywords' => 'VARCHAR(250) DEFAULT NULL',
        'seo_description' => 'VARCHAR(250) DEFAULT NULL',
        'seo_h1' => 'VARCHAR(50) DEFAULT NULL',
    ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('service_items');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180930_195905_service_items cannot be reverted.\n";

        return false;
    }
    */
}
