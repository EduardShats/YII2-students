<?php
/**
 * Created by PhpStorm.
 * User: Эдуард
 * Date: 03.07.2018
 * Time: 16:52
 */

namespace app\models;


use yii\db\ActiveRecord;

class StudentForm extends ActiveRecord
{

    public static function tableName()
    {
        return 'students';
    }

    public function attributeLabels()
    {
        return [
            'surname' => 'Фамилия',
            'forename' => 'Имя',
            'patronymic' => 'Отчество',
            'university_id' => 'Университет',
            'profession' => 'Специальность',
            'course' => 'Курс',
            'info' => 'Информация о себе',
        ];
    }

    public function rules()
    {
        return [
            // name, forename, patronymic, university, profession, course, info обязательные для ввода
            [['surname', 'forename', 'patronymic', 'university_id', 'profession', 'course', 'info'], 'required'],
            // name, forename, patronymic должны иметь длинну от 2 до 20 символов
            [['surname', 'forename', 'patronymic'], 'string', 'length' => [2, 20]],
            [['surname', 'forename', 'patronymic', 'profession', 'info'], 'trim'],
            ['course', 'in', 'range' => [1, 2, 3, 4, 5, 6]]
        ];
    }

}