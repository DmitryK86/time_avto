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
            'id' => $this->integer()->unique(),
            'name' => $this->string()->notNull(),
            'logo' => $this->string(255),
            'description' => $this->string(),
            'status' => $this->boolean()
        ]);

        $this->addPrimaryKey('car_brand_pk', '{{%car_brand}}', ['id']);
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
