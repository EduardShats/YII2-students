<?php

/* @var $this yii\web\View */
use \yii\helpers\Url;
$this->title = 'Студенты';
?>

    <div class="demo">
    <?php foreach($universitys as $key =>$value)
        {
            echo "
        <input class=\"hide\" id=\"hd-$key\" type=\"checkbox\">
        <label for=\"hd-$key\">", $value['name'] ,"</label>
        <div>
            <table>
                <thead>
                    <tr>
                        <th width='350px'>ФИО</th>
                        <th width='100px'>Профессия</th>
                        <th>Курс</th>
                    </tr>
                </thead>
                <tbody>";
                $students = $value['students'];
                foreach($students as $value1)
                {
                    if($value1['university_id'] == $value['id'])
                    {
                        echo "
                    <tr data-href=\"", Url::toRoute(['student/student', 'id' => $value1['id']]) ,"\">
                        <td align='left'>",$value1['surname']," ",$value1['forename'],"  ",$value1['patronymic']," </td>
                        <td>",$value1['profession']," </td>
                        <td>",$value1['course']," </td>    
                    </tr>";
                    }
                }
                echo "
                </tbody>
            </table>
        </div>
        <br />";
        }
    ?>

        <a href='<?= Url::toRoute(['student/add'])?>' >Добавить запись</a>
    </div>
