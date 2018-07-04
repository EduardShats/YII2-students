<?php
/**
 * Created by PhpStorm.
 * User: Эдуард
 * Date: 03.07.2018
 * Time: 16:52
 */

namespace app\models;


use yii\base\Model;

class StudentForm extends Model
{
    public $surname;
    public $forename;
    public $patronymic;
    public $university;
    public $profession;
    public $course;
    public $info;

    public function rules()
    {
        return [
            // name, forename, patronymic, university, profession, course, info обязательные для ввода
            [['name', 'forename', 'patronymic', 'university', 'profession', 'course', 'info'], 'required'],
            // name, forename, patronymic должны иметь длинну от 2 до 20 символов
            [['name', 'forename', 'patronymic'], 'string', 'length' => [2, 20]],
            [['name', 'forename', 'patronymic', 'profession', 'info'], 'trim'],
            ['course', 'in', 'range' => [1, 2, 3, 4, 5, 6]]
        ];
    }

}