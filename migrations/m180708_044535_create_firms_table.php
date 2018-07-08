<?php

use yii\db\Migration;

/**
 * Handles the creation of table `firms`.
 */
class m180708_044535_create_firms_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('firms', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'logo' => $this->string()->notNull(),
        ]);

        $this->batchInsert('firms',
            ['name', 'logo'],
            [['firm1', 'logo1'],
             ['firm2', 'logo2'],
             ['firm3', 'logo3']]
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete(
            'firms',
            ['id' => [1, 2, 3]]
        );
        $this->dropTable('firms');
    }
}
