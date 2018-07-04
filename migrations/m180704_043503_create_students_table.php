<?php

use yii\db\Migration;

/**
 * Handles the creation of table `students`.
 * Has foreign keys to the tables:
 *
 * - `universitys`
 */
class m180704_043503_create_students_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('students', [
            'id' => $this->primaryKey(),
            'university_id' => $this->integer()->notNull(),
            'surname' => $this->string(20)->notNull(),
            'forename' => $this->string(20)->notNull(),
            'patronymic' => $this->string(20)->notNull(),
            'profession' => $this->string()->notNull(),
            'course' => $this->tinyinteger()->unsigned()->notNull(),
            'info' => $this->text(),
        ]);

        // creates index for column `university_id`
        $this->createIndex(
            'idx-students-university_id',
            'students',
            'university_id'
        );

        // add foreign key for table `universitys`
        $this->addForeignKey(
            'fk-students-university_id',
            'students',
            'university_id',
            'universitys',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `universitys`
        $this->dropForeignKey(
            'fk-students-university_id',
            'students'
        );

        // drops index for column `university_id`
        $this->dropIndex(
            'idx-students-university_id',
            'students'
        );

        $this->dropTable('students');
    }
}
