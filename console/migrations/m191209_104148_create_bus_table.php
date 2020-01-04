<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%bus}}`.
 */
class m191209_104148_create_bus_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%bus}}', [
            'id' => $this->primaryKey(),
            'brand_id' => $this->integer()->notNull(),
            'category_id' => $this->integer()->notNull(),
            'subcategory_id' => $this->integer()->notNull(),
            'article' => $this->string(),
            'name' => $this->string(10)->notNull(),
            'description' => $this->string()->notNull(),
            'price' => $this->string()->notNull(),
            'power' => $this->string()->notNull(),
            'vehicle' => $this->string()->notNull(),
            'transmission' => $this->string()->notNull(),
            'weight' => $this->string()->notNull(),
            'passengers_number' => $this->integer()->notNull(),
            'picture' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%bus}}');
    }
}
