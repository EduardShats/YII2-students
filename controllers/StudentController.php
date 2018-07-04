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
        $universitys = University::find()->asArray()->with('students')->orderBy('name')->all();
        return $this->render('index', compact('universitys'));
    }

    public function actionStudent($id)
    {
        $student = Student::find()->asArray()->with('university')->where(['id' => $id])->one();
        return $this->render('student', compact('student'));
    }

    public function actionAdd()
    {
        return $this->render('add');
    }
}