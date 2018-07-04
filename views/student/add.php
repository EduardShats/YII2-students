<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<?php if(Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?= Yii::$app->session->getFlash('success') ?>
    </div>
<?php endif;?>
<?php if(Yii::$app->session->hasFlash('error')): ?>
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?= Yii::$app->session->getFlash('error') ?>
    </div>
<?php endif;?>
<?php
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

