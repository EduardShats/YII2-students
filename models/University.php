<?php
/**
 * Created by PhpStorm.
 * User: Эдуард
 * Date: 04.07.2018
 * Time: 13:50
 */

namespace app\models;


use yii\db\ActiveRecord;

class University extends ActiveRecord
{
    public static function tableName()
    {
        return 'universitys';
    }

    public function getStudents()
    {
        return $this->hasMany(Student::className(), ['university_id' => 'id']);
    }
}