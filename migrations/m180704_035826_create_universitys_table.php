<?php

use yii\db\Migration;

/**
 * Handles the creation of table `universitys`.
 */
class m180704_035826_create_universitys_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('universitys', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'region' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('universitys');
    }
}
