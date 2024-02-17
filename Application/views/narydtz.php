<?php
$this->load->database();
?>

<div class="content">
    <form  method="POST"  role="form" class="FormLine" action="http://Rizar:8080/index.php/Nar/Insert" >
     <fieldset>
        <table  border="0">
            <tr>
                <td>
                    &nbsp &nbsp <b>Оборудование</b>
                    <br>
                    <select name='obor'>
                        <?
                        $sql2 = $this->db->get('obor');
                        foreach  ($sql2->result_array() as $row)
                        {
                            echo '<option value="'.$row['id_obor'].'">'.$row['nameobor'].'</option>';}
                        ?>
                    </select>
                </td>
                <td>
                    <button class="btn-success" formaction="http://Rizar:8080/index.php/Obor/Index"> Купить оборудование</button>
                </td>
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
                    &nbsp &nbsp <b>Услуги</b>
                    <br>
                    <select name='usl'>
                        <?
                        $sql4 = $this->db->get('usluga');
                        foreach  ($sql4->result_array() as $row)
                        {
                            echo '<option value="'.$row['id_usluga'].'">'.$row['namusluga'].'</option>';}
                        ?>
                    </select>
                </td>

</tr><tr>
                <td>    &nbsp  &nbsp <b>Количество</b>
                    <br>
                    <input type="number" class="form-control"  name="kol" placeholder="Количество " requered>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" class="btn-primary">Создать наряд</button>
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
            <th>Количество</th>
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
                <td><?=$row["dfactvip"];?></td>
                <td><?=$row["kol"];?></td>
                <td><?=$row["status"];?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>

    </table>


