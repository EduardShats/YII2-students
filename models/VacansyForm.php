<?php
/**
 * Created by PhpStorm.
 * User: Эдуард
 * Date: 08.07.2018
 * Time: 10:14
 */

namespace app\models;


use yii\db\ActiveRecord;

class VacansyForm extends ActiveRecord
{
    public static function tableName()
    {
        return 'vacansys';
    }

    public function attributeLabels()
    {
        return [
            'professy' => 'Профессия',
            'price' => 'Цена',
            'firm_id' => 'Фирма',
            'skills' => 'Необходимые навыки',
        ];
    }

    public function rules()
    {
        return [
            [['professy', 'price', 'firm_id', 'skills'], 'required'],
            [['professy', 'price', 'firm_id', 'skills'], 'trim'],
            ['price', 'integer'],
        ];
    }
}