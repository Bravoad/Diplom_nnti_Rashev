<?php
$this->load->database();
?>
<div class="content">
    <table id="example" class="display" cellspacing="0" width="100%">

        <thead>
        <tr>
            <th>Наименование оборудования</th>
            <th>Тип оборудования</th>
            <th>Количество </th>
            <th>Суммарное количество </th>

        </tr>
        </thead>
        <tbody>
        <?php

        foreach  ($index as $row):?>
            <tr>
                <td><?=$row["nameobor"];?></td>
                <td><?=$row["typobor"];?></td>
                <td><?=$row["kolkop"];?></td>
                <td><?=$row["ko"];?></td>

            </tr>
        <?php endforeach; ?>
        </tbody>

    </table>
</div>

