<?php
$this->load->database();
?>
<div class="content">
    <form  method="post"  role="form" class="form-inline"  action="http://Rizar:8080/index.php/Usl/Insert">
        <div class="form-group mb-lg-0 col-lg-offset-0">
            <table>
                <tr>
                    <td>
                        &nbsp     <b>Наименование услуги</b>
                        <br>
                        <input type="text" class="form-control" name="usl" placeholder="Введите услуги">
                    </td>
                    <td>
                        &nbsp &nbsp <b>Стоимость</b>
                        <br>
                        <input type="text" class="form-control" name="stom" placeholder="Введите  стоимость">
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn-primary">Добавить новую услугу</button>
                    </td>
                </TR>
            </table>
        </div>
    </form>

    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Номер услуги</th>
            <th>Наименование услуги</th>
            <th>Стоимость</th>
        </tr>
        </thead>
        <tbody>
        <?php

        foreach  ($index as $row):
        {
            echo '<tr>';
            echo '<td>'.$row["id_usluga"].'</td>';
            echo '<td>'.$row["namusluga"].'</td>';
            echo '<td>'.$row["stom"].'</td>';
            echo '</tr>';
        }
        endforeach;
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
        ?>

