<?php
/**
 * Created by PhpStorm.
 * User: Эдуард
 * Date: 08.07.2018
 * Time: 10:11
 */

namespace app\models;


use yii\db\ActiveRecord;

class Firm extends ActiveRecord
{
    public static function tableName()
    {
        return 'firms';
    }

    public function getVacansys()
    {
        return $this->hasMany(Vacansy::className(), ['firm_id' => 'id']);
    }
}