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
        $this->createTable('{{%sub_categories}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'sub_category' => $this->string()->notNull(),
            'sub_category_alter' => $this->string()->notNull(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%sub_categories}}');
    }
}
