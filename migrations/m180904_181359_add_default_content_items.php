<?php

use yii\db\Migration;

/**
 * Class m180904_181359_add_default_menu_items
 */
class m180904_181359_add_default_content_items extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute('ALTER DATABASE timeavto CHARACTER SET utf8 COLLATE utf8_general_ci');

        Yii::$app->db->createCommand()->batchInsert('menu_items', ['slug', 'title'], [
            ['promo', 'Акции'],
            ['services', 'Услуги'],
            ['prices', 'Цены'],
            ['info', 'Информация'],
            ['gallery', 'Фотогалерея'],
            ['shop', 'Магазин'],
            ['comment', 'Отзывы'],
            ['contacts', 'Контакты'],
        ])->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->execute('DELETE FROM menu_items');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180904_181359_add_default_menu_items cannot be reverted.\n";

        return false;
    }
    */
}
