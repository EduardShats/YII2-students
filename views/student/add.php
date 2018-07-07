<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;


$form = ActiveForm::begin();
echo $form->field($model, 'surname');
echo $form->field($model, 'forename');
echo $form->field($model, 'patronymic');
echo $form->field($model, 'university_id');
echo $form->field($model, 'profession');
echo $form->field($model, 'course');
echo $form->field($model, 'info')->textarea();
echo Html::submitButton('Добавить', ['class' => 'btn btn-success']);
ActiveForm::end();

