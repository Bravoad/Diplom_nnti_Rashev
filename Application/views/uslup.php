<?php
$this->load->database();
?>

<div class="content">
    <form  method="POST"  role="form" class="FormLine" action="http://Rizar:8080/index.php/Uslugup/update" >
        <fieldset>
            <table  border="0" >
                <tr>
                    <td>
                        &nbsp &nbsp <b>Услуга</b>
                        <br>
                        <select name='usl'>
                            <?
                            $sql2 = $this->db->get('usluga');
                            foreach  ($sql2->result_array() as $row)
                            {
                                echo '<option value="'.$row['id_usluga'].'">'.$row['namusluga'].'</option>';}
                            ?>
                        </select>
                </td>

                </tr><tr>
                    <td>    &nbsp  &nbsp <b>Cтоимость</b>
                        <br>
                        <input type="number" class="form-control"  name="stom" placeholder="Ввести стоимость" requered>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn-primary">Внести изменения</button>
                    </td>
                </tr>
            </table>
        </fieldset>
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
    </table>

