<?php

use yii\db\Migration;

/**
 * Class m181115_081717_car_model
 */
class m181115_081717_car_model extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%car_model}}', [
            'id' => $this->integer()->unique(),
            'name' => $this->string()->notNull(),
            'description' => $this->string(),
            'status' => $this->boolean(),
            'car_brand_id' => $this->integer()->notNull()
        ]);

        $this->addPrimaryKey('car_model_pk', '{{%car_model}}', ['id']);
        $this->addForeignKey('fk_car_brand', '{{%car_model}}', 'car_brand_id', '{{%car_brand}}', 'id', 'cascade', 'cascade');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%car_model}}');
        echo "table car_model has been deleted. \n";
    }
}
