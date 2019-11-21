<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products}}`.
 */
class m191115_100827_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'brand_id' => $this->integer()->notNull(),
            'subcategory_id' => $this->integer()->notNull(),
            'article' => $this->string(),
            'name' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%products}}');
    }
}
