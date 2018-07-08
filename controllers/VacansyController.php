<?php
/**
 * Created by PhpStorm.
 * User: Эдуард
 * Date: 08.07.2018
 * Time: 10:04
 */

namespace app\controllers;


use app\models\Firm;
use app\models\Vacansy;
use app\models\VacansyForm;
use yii\web\Controller;
use yii;

class VacansyController extends  Controller
{
    public function actionIndex()
    {
        $firms = Firm::find()->asArray()->with('vacansys')->orderBy('name')->all();
        return $this->render('index', compact('firms'));
    }

    public function actionVacansy($id)
    {
        $vacansy = Vacansy::find()->asArray()->with('firm')->where(['id' => $id])->one();
        return $this->render('vacansy', compact('vacansy'));
    }

    public function actionAdd()
    {
        $model = new VacansyForm();
        if($model->load(Yii::$app->request->post()))
        {
            if($model->save())
            {
                Yii::$app->session->setFlash('success', 'Запись добавлена успешно');
                return $this->refresh();
            }
            else
            {
                Yii::$app->session->setFlash('error', 'Ошибка');
            }
        }
        $firms = Firm::find()->asArray()->orderBy('name')->all();
        return $this->render('add', compact('model', 'firms'));
    }
}