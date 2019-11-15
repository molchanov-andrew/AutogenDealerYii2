<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%subCategories}}`.
 */
class m191114_134357_create_subCategories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%subCategories}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'sub_categories' => $this->text()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%subCategories}}');
    }
}
