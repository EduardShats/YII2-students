<?php

/* @var $this yii\web\View */
use \yii\helpers\Url;
$this->title = 'Вакансии';
?>

    <div class="demo">
    <?php foreach($firms as $key =>$value)
        {
            echo "
        <input class=\"hide\" id=\"hd-$key\" type=\"checkbox\">
        <label for=\"hd-$key\">", $value['name'] ,"</label>
        <div>
            <table>
                <thead>
                    <tr>
                        <th width='100px'>Профессия</th>
                        <th width='100px'>Цена</th>
                    </tr>
                </thead>
                <tbody>";
                $vacansys = $value['vacansys'];
                foreach($vacansys as $value1)
                {
                    if($value1['firm_id'] == $value['id'])
                    {
                        echo "
                    <tr data-href=\"", Url::toRoute(['vacansy/vacansy', 'id' => $value1['id']]) ,"\">
                        <td align='left'>",$value1['professy']," </td>
                        <td>",$value1['price']," </td>    
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

        <a href='<?= Url::toRoute(['vacansy/add'])?>' >Добавить запись</a>
    </div>
