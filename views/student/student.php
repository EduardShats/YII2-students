<?php

/* @var $this yii\web\View */
use \yii\helpers\Url;
$university = $student['university'];
$this->title = $student['surname'].' '.$student['forename'].' '.$student['patronymic'].' - '.$university['name'];

?>

<h1><?= $student['surname'].' '.$student['forename'].' '.$student['patronymic']?></h1>
<hr/>
<h2>Место учебы: <?= $university['name']?></h2>
<h2>Курс: <?= $student['course']?></h2>
<h2>Информация о студенте: </h2>
<p><?= $student['info']?></p>
