<?php
/**
 * Created by PhpStorm.
 * User: Эдуард
 * Date: 04.07.2018
 * Time: 13:33
 */

namespace app\models;


use yii\db\ActiveRecord;

class Student extends ActiveRecord
{
    public static function tableName()
    {
        return 'students';
    }
}