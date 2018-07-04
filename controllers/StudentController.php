<?php
/**
 * Created by PhpStorm.
 * User: Эдуард
 * Date: 04.07.2018
 * Time: 13:27
 */

namespace app\controllers;


use app\models\Student;
use app\models\University;
use yii\web\Controller;

class StudentController extends Controller
{
    public function actionIndex()
    {
        $students = Student::find()->asArray()->orderBy('surname')->all();
        $universitys = University::find()->asArray()->orderBy('name')->all();
        return $this->render('index', compact('students', 'universitys'));
    }

    public function actionStudent($id)
    {
        $student = Student::find()->asArray()->where(['id' => $id])->one();
        $university = University::find()->asArray()->where(['id' => $student['university_id']])->one();
        return $this->render('student', compact('student', 'university'));
    }
}