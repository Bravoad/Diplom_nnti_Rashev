<?php
$this->load->database();
?>
<div class="content">
    <form  method="post"  role="form" class="form-inline">
        <form  method="post"  role="form" class="form-inline"  action="http://Rizar:8080/index.php/Otch/Select3">
            <div class="form-group mb-lg-0 col-lg-offset-0">
                <table>
                    <tr>
                        <td>
                            &nbsp &nbsp       <b> Дата начала периода</b>
                            <br>
                            <input type="date" class="form-control"  name="d5" placeholder="Введите дату начала периода" requered>
                        </td>
                        <td>
                            &nbsp &nbsp                <b> Дата конца периода </b>
                            <br>
                            <input type="date" class="form-control"  name="d6" placeholder="Введите дату конца периода" requered>
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
                <th>Код услуги</th>
                <th>Наименование услуги</th>
            </tr>
            </thead>
            <tbody>

            <?php
            if (isset($index3)) {
                foreach ($index3 as $row): {
                    echo '<tr>';
                    echo '<td>'.$row["id_usluga"].'</td>';
                    echo '<td>'.$row["namusluga"].'</td>';
                    echo '</tr>';
                }
                endforeach;
            }
            echo '</tbody>';
            echo '</table>';
            echo '</div>';
            ?>

