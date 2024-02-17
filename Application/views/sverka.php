<?php
$this->load->database();
?>
<div class="content">
    <form  method="post"  role="form" class="form-inline">
        <form  method="post"  role="form" class="form-inline"  action="http://Rizar:8080/index.php/Otch/Select7">
            <div class="form-group mb-lg-0 col-lg-offset-0">
                <table>
                    <tr>
                        <td>
                            &nbsp &nbsp       <b> Дата начала периода</b>
                            <br>
                            <input type="date" class="form-control"  name="d13" placeholder="Введите дату начала периода" requered>
                        </td>
                        <td>
                            &nbsp &nbsp                <b> Дата конца периода </b>
                            <br>
                            <input type="date" class="form-control"  name="d14" placeholder="Введите дату конца периода" requered>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" class="btn-primary" STYLE="margin-left: 2%;">Отобразить сведения</button>
                        </td>
                    </tr>
                </table>
            </div>
        </form>

        <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Номер договора</th>
                <th>Номер наряда</th>
                <th>Стоимость оплаты</th>
                <th>Стоимость услуги </th>
                <th>Сальдо </th>
            </tr>
            </thead>
            <tbody>
            <?php
            if (isset($index7)) {
                foreach ($index7 as $row): {
                    echo '<tr>';
                    echo '<td>'.$row["id_dog"].'</td>';
                    echo '<td>'.$row["id_nar"].'</td>';
                    echo '<td>'.$row["stomo"].'</td>';
                    echo '<td>'.$row["stom"].'</td>';
                    echo '<td>'.$row["saldo"].'</td>';
                    echo '</tr>';
                }
                endforeach;
            }
            echo '</tbody>';
            echo '</table>';
            echo '</div>';
            ?>

