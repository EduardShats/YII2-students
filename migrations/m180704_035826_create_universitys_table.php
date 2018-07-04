<?php

use yii\db\Migration;


class m180704_035826_create_universitys_table extends Migration
{

    public function safeUp()
    {
        $this->createTable('universitys', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'region' => $this->string()->notNull(),
        ]);

        $this->batchInsert('universitys',
            ['name', 'region'],
            [['АлтГТУ им. И. И. Ползунова', 'Алтайский край'],
             ['АГУ', 'Алтайский край'],
             ['АГМУ', 'Алтайский край']]
        );
    }

    public function safeDown()
    {
        $this->delete(
            'universitys',
            ['id' => [1, 2, 3]]
        );
        $this->dropTable('universitys');
    }
}
