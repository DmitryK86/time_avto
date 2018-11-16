<?php

use yii\db\Migration;

/**
 * Class m181115_074902_car_brand
 */
class m181115_074902_car_brand extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%car_brand}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'logo' => $this->string(),
            'description' => $this->text(),
            'status' => $this->boolean()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%car_brand}}');
        echo "table car_brand has been deleted. \n";
    }
}
