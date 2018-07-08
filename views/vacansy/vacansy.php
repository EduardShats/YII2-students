<?php

/* @var $this yii\web\View */
use \yii\helpers\Url;
$firm = $vacansy['firm'];
$this->title = $vacansy['professy'].' - '.$firm['name'];

?>

<h1><?= $vacansy['professy']?></h1>
<hr/>
<h2>Цена: <?= $vacansy['price']?></h2>
<h2>Фирма: <?= $firm['name']?></h2>
<h2>Необходимые навыки: </h2>
<p><?= $vacansy['skills']?></p>
