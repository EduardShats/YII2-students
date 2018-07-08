<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

$form = ActiveForm::begin();
echo $form->field($model, 'surname');
echo $form->field($model, 'forename');
echo $form->field($model, 'patronymic');
echo $form->field($model, 'university_id')->dropDownList(ArrayHelper::map($universitys, 'id', 'name', 'region'), ['prompt' => 'Выберите университет ...']);
echo $form->field($model, 'profession');
echo $form->field($model, 'course');
echo $form->field($model, 'info')->textarea();
echo Html::submitButton('Добавить', ['class' => 'btn btn-success']);
ActiveForm::end();



