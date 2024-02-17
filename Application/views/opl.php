<?php
$this->load->database();
?>
<div class="content">
	<form  method="post"  role="form" class="form-inline"  action="http://Rizar:8080/index.php/Opl/Insert">
        <div class="form-group mb-lg-0 col-lg-offset-0">
			<table>
				<tr>
					<td>
                        &nbsp   &nbsp   <b>Тип оплаты</b>
                        <br>
                    <Select class="selectpicker" name="typ">
                        <option value="Повременная">Повременная </option>
                        <option value="Сдельная">Сдельная</option>
                        <option value="Договорная">Договорная</option>
                    </Select>
					</td>
                    <td>
                        &nbsp &nbsp <b>Способ оплаты</b>
                        <br>
                        <Select class="selectpicker" name="spos">
                            <option value="Яндекс-деньги">Яндекс-деньги </option>
                            <option value="Карта 'Мир'">Карта"Мир"</option>
                            <option value="Наличными">Наличными</option>
                        </Select>
                    </td>
                    <td>
                        &nbsp   &nbsp    <b>Цена</b>
                        <br>
                        <input type="text" class="form-control" name="stom" placeholder="Введите оплату">
                    </td>
                    <td>
                        &nbsp   &nbsp    <b>Дату оплаты</b>
                        <br>
                        <input type="date" class="form-control" name="dopl" placeholder="Введите даты оплаты">
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
                </tr>

                <tr>
					<td>
						<button type="submit" class="btn-primary">Ввод оплаты</button>
					</td>
				</TR>
			</table>
		</div>
    </form>

    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Номер оплаты</th>
                <th>Тип оплаты</th>
                <th>Способ оплаты</th>
                <th>Дата оплаты</th>
                <th>Стоимость</th>
                <th>Номер договора</th>

            </tr>
        </thead>
        <tbody>
<?php

foreach  ($index as $row):
                {
                echo '<tr>';
                echo '<td>'.$row["id_opl"].'</td>';
                echo '<td>'.$row["typopl"].'</td>';
                echo '<td>'.$row["sposopl"].'</td>';
                echo '<td>'.$row["dopl"].'</td>';
                echo '<td>'.$row["stom"].'</td>';
                echo '<td>'.$row["id_dog"].'</td>';

                echo '</tr>';
            }
endforeach;
            echo '</tbody>';
        echo '</table>';
echo '</div>';
 ?>

