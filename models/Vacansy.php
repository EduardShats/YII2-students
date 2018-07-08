<?php
/**
 * Created by PhpStorm.
 * User: Эдуард
 * Date: 08.07.2018
 * Time: 10:11
 */

namespace app\models;


use yii\db\ActiveRecord;

class Vacansy extends ActiveRecord
{
    public static function tableName()
    {
        return 'vacansys';
    }

    public function getFirm()
    {
        return $this->hasOne(Firm::className(), ['id' => 'firm_id']);
    }
}