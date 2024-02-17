<?php
$this->load->database();
?>
<div class="content">
    <form  method="post"  role="form" class="form-inline">
        <form  method="post"  role="form" class="form-inline"  action="http://Rizar:8080/index.php/Otch/Select">
            <div class="form-group mb-lg-0 col-lg-offset-0">
            <table>
                <tr>
                    <td>
                        &nbsp &nbsp       <b> Дата начала периода</b>
                <br>
                <input type="date" class="form-control"  name="d1" placeholder="Введите дату начала периода" requered>
                    </td>
                    <td>
&nbsp &nbsp                <b> Дата конца периода </b>
                <br>
                <input type="date" class="form-control"  name="d2" placeholder="Введите дату конца периода" requered>
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
            <th>Наименование клиента</th>
            <th>Телефон</th>
            <th>Адрес </th>
            <th>ИНН </th>
            <th>Описания требований </th>
            <th>Дата заявки </th>
            <th>Дата подписания </th>
        </tr>
        </thead>
        <tbody>
        <?php
        if (isset($index)) {
            foreach ($index as $row): {
                echo '<tr>';
                echo '<td>' . $row["namkli"] . '</td>';
                echo '<td>' . $row["tel"] . '</td>';
                echo '<td>' . $row["adr"] . '</td>';
                echo '<td>' . $row["inn"] . '</td>';
                echo '<td>' . $row["opis"] . '</td>';
                echo '<td>' . $row["datazaya"] . '</td>';
                echo '<td>' . $row["datapod"] . '</td>';
                echo '</tr>';
            }
            endforeach;
        }
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
        ?>

