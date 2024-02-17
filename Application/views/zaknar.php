<?php
$this->load->database();
?>

<div class="content">
    <form  method="POST"  role="form" class="FormLine" action="http://Rizar:8080/index.php/Zaknar/Update" >
        <fieldset>
            <table  border="0" >
                <tr>

                    <td>
                        &nbsp &nbsp <b>Наряд</b>
                        <br>
                        <select name='nar'>
                            <?
                            $sql3 = $this->db->get('naryd');
                            foreach  ($sql3->result_array() as $row)
                            {
                                echo '<option value="'.$row['id_nar'].'">'.$row['id_nar'].'</option>';}
                            ?>
                        </select>
                    </td>

                    <td>    &nbsp  &nbsp <b>Дата фактического выполнения наряда</b>
                        <br>
                        <input type="date" class="form-control"  name="dat2" placeholder="Дата фактического выполнения наряда " requered>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn-primary">Закрыть наряд</button>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>

    <table id="example" class="display" cellspacing="0" width="100%">

        <thead>
        <tr>
            <th>Номер наряда</th>
            <th>Номер договора</th>
            <th>Номер оборудованя</th>
            <th>Номер работника</th>
            <th>Номер услуги</th>
            <th>Дата открытия наряда</th>
            <th>Дата фактическое выполнения наряда</th>
            <th>Статус</th>
        </tr>
        </thead>
        <tbody>
        <?php

        foreach  ($index as $row):?>
            <tr>
                <td><?=$row["id_nar"];?></td>
                <td><?=$row["id_dog"];?></td>
                <td><?=$row["id_obor"];?></td>
                <td><?=$row["id_rab"];?></td>
                <td><?=$row["id_usluga"];?></td>
                <td><?=$row["dotnar"];?></td>
                <td><?=$row["dzaknar"];?></td>
                <td><?=$row["dfactvip"];?></td>
                <td><?=$row["status"];?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>

    </table>

