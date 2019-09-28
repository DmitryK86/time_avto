<?php

use yii\db\Migration;

/**
 * Class m180903_193109_content_items
 */
class m180903_193109_menu_items extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute('ALTER DATABASE timeavto  CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci');

        $this->createTable('menu_items', [
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
        $this->dropTable('menu_items');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180903_193109_static_pages cannot be reverted.\n";

        return false;
    }
    */
}
