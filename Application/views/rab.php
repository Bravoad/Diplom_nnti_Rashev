<?php
$this->load->database();
?>
<div class="content">
    <form  method="post"  role="form" class="form-inline"  action="http://Rizar:8080/index.php/Rab/Insert">
        <div class="form-group mb-lg-0 col-lg-offset-0">
            <table>
                <tr>
                    <td>
                        &nbsp     <b>ФИО работника</b>
                        <br>
                        <input type="text" class="form-control" name="rab" placeholder="Введите работника">
                    </td>
                    <td>
                        &nbsp &nbsp <b>Специальность</b>
                        <br>
                        <input type="text" class="form-control" name="spec" placeholder="Введите  специальность">
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn-primary">Принять на работу</button>
                    </td>
                </TR>
            </table>
        </div>
    </form>

    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Номер работника</th>
            <th>ФИО работника</th>
            <th>Специальность</th>
            <th>Статус</th>
        </tr>
        </thead>
        <tbody>
        <?php

        foreach  ($index as $row):
        {
            echo '<tr>';
            echo '<td>'.$row["id_rab"].'</td>';
            echo '<td>'.$row["fiorab"].'</td>';
            echo '<td>'.$row["spec"].'</td>';
            echo '<td>'.$row["status"].'</td>';
            echo '</tr>';
        }
        endforeach;
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
        ?>

