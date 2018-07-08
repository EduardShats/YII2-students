<?php

use yii\db\Migration;

/**
 * Handles the creation of table `vacansys`.
 * Has foreign keys to the tables:
 *
 * - `firms`
 */
class m180708_044944_create_vacansys_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('vacansys', [
            'id' => $this->primaryKey(),
            'professy' => $this->string()->notNull(),
            'price' => $this->integer()->unsigned()->notNull(),
            'firm_id' => $this->integer()->notNull(),
            'skills' => $this->text()->notNull(),
        ]);

        // creates index for column `firm_id`
        $this->createIndex(
            'idx-vacansys-firm_id',
            'vacansys',
            'firm_id'
        );

        // add foreign key for table `firms`
        $this->addForeignKey(
            'fk-vacansys-firm_id',
            'vacansys',
            'firm_id',
            'firms',
            'id',
            'CASCADE'
        );
        $this->batchInsert('vacansys',
            ['professy', 'price', 'firm_id', 'skills'],
            [['professy1', '1231', '1', 'skills1'],
             ['professy2', '3214', '2', 'skills2'],
             ['professy3', '432', '3', 'skills3']]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete(
            'vacansys',
            ['id' => [1, 2, 3]]
        );
        // drops foreign key for table `firms`
        $this->dropForeignKey(
            'fk-vacansys-firm_id',
            'vacansys'
        );

        // drops index for column `firm_id`
        $this->dropIndex(
            'idx-vacansys-firm_id',
            'vacansys'
        );

        $this->dropTable('vacansys');
    }
}
