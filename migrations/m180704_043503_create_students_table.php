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
    public function up()
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

        $this->batchInsert('students',
            ['university_id', 'surname', 'forename', 'patronymic', 'profession', 'course', 'info'],
            [['1', 'Иванов', 'Иван', 'Иванович', 'програмист', '1', 'фываф'],
             ['2', 'Петров', 'Петр', 'Петрович', 'математик', '2', 'фыв'],
             ['3', 'Сидоров', 'Николай', 'Николаевич', 'терапевт', '4', 'фыв']]
        );

    }


    /**
     * {@inheritdoc}
     */
    public function down()
    {

        $this->delete(
            'students',
            ['id' => [1, 2, 3]]
        );

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
