<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

$form = ActiveForm::begin();
echo $form->field($model, 'professy');
echo $form->field($model, 'price');
echo $form->field($model, 'firm_id')->dropDownList(ArrayHelper::map($firms, 'id', 'name'), ['prompt' => 'Выберите фирму...']);
echo $form->field($model, 'skills')->textarea();
echo Html::submitButton('Добавить', ['class' => 'btn btn-success']);
ActiveForm::end();



