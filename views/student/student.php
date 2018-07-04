<?php

/* @var $this yii\web\View */
use \yii\helpers\Url;
$this->title = $student['surname'].' '.$student['forename'].' '.$student['patronymic'].' - '.$university['name'];
?>

<h1><?= $student['surname'].' '.$student['forename'].' '.$student['patronymic']?></h1>
<hr/>
<h2>Место учебы: <?= $university['name']?></h2>
<h2>Курс: <?= $student['course']?></h2>
<h2>Информация о студенте: </h2>
<p><?= $student['info']?></p>
<div class="demo">
    <?php/* foreach($universitys as $key =>$value)
    {
        echo "
        <input class=\"hide\" id=\"hd-$key\" type=\"checkbox\">
        <label for=\"hd-$key\">", $value['name'] ,"</label>
        <div>
            <table>";
        foreach($students as $value1)
        {
            if($value1['university_id'] == $value['id'])
            {
                echo "
                <tr><a href='", Url::toRoute(['student/student', 'id' => $value1['id']]) ,"'>
                    <td>",$value1['surname']," </td>
                    <td>",$value1['forename']," </td>
                    <td>",$value1['patronymic']," </td>
                    <td>",$value1['profession']," </td>
                    <td>",$value1['course']," </td>
                </a></tr>";
            }
        }
        echo "
            </table>
        </div>
        <br />";
    }
    */?>


</div>
