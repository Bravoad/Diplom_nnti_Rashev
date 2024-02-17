<?php
$this->load->database();
?>
<div class="content">
    <form  method="post"  role="form" class="form-inline"  action="http://Rizar:8080/index.php/UDog/update">
        <div class="form-group mb-lg-0 col-lg-offset-0">
            <table>
                <tr>
                    <td>
                        &nbsp &nbsp <b>Договор</b>
                        <br>
                        <select name='dog'>
                            <?
                            $sql3 = $this->db->get('dogovor');
                            foreach  ($sql3->result_array() as $row)
                            {
                                echo '<option value="'.$row['id_dog'].'">'.$row['namkli'].'</option>';}
                            ?>
                        </select>

                    </td>

                    <td>
                        <label for="">&nbsp <b>Дата подписания</b></label>
                        <br>
                        <input type="date" class="form-control"  name="dat" placeholder="Введите дату подписания" requered>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn-primary">Подписать договор</button>
                    </td>
                </TR>
            </table>
        </div>
    </form>

    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Номер заявки</th>
            <th>Наименование клиента</th>
            <th>Адрес</th>
            <th>ИНН</th>
            <th>Банковские реквизиты</th>
            <th>Телефон</th>
            <th>Дата заявки</th>
            <th>Дата подписания</th>
            <th>Дата выполнения</th>
            <th>Статус договора</th>
            <th>Описание</th>
        </tr>
        </thead>
        <tbody>
        <?php

        foreach  ($index as $row):
        {
            echo '<tr>';
            echo '<td>'.$row["id_dog"].'</td>';
            echo '<td>'.$row["namkli"].'</td>';
            echo '<td>'.$row["adr"].'</td>';
            echo '<td>'.$row["inn"].'</td>';
            echo '<td>'.$row["bankrekv"].'</td>';
            echo '<td>'.$row["tel"].'</td>';
            echo '<td>'.$row["datazaya"].'</td>';
            echo '<td>'.$row["datapod"].'</td>';
            echo '<td>'.$row["dvip"].'</td>';
            echo '<td>'.$row["status"].'</td>';
            echo '<td>'.$row["opis"].'</td>';

            echo '</tr>';
        }
        endforeach;
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
        ?>

