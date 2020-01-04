<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sub_category}}`.
 */
class m191122_114440_create_sub_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%sub_category}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'brand_id' => $this->integer()->notNull(),
            'sub_category' => $this->string(),
            'sub_category_alter' => $this->string(),
            'sub_category_picture' => $this->string(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%sub_category}}');
    }
}
