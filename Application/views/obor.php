<?php
$this->load->database();
?>

	<div class="content">
		<form  method="POST"  role="form" class="FormLine" action="http://Rizar:8080/index.php/Obor/Insert" >
			<table  border="0" >
                <tr>
                    <td>
                        &nbsp  &nbsp  <b> Поставщик</b>
                        <br>
                        <input type="text" class="form-control" name="post" placeholder="Введите поставщика">
                    </td>
                    <td>
                        &nbsp &nbsp <b>Вендор</b>
                        <br>
                        <input type="text" class="form-control" name="vend" placeholder="Введите вендора">
                    </td>
                </tr>
				<tr>
					<td>
                        &nbsp &nbsp  <b> Оборудование</b>
					<br>
						<input type="text" class="form-control"  name="namob"  requered placeholder="Название оборудования">
					</td>
					<td>    &nbsp  &nbsp <b>Количество копий</b>
					<br>
						<input type="number" class="form-control"  name="kol" placeholder="Количество копий"  requered>
					</td>
					<td>    &nbsp  &nbsp <b>Стоимость 1-ой копии</b>
					<br>
					<input type="number" class="form-control"  name="st" placeholder="Стоимость 1-ой копии " requered>
					</td>
				</tr>
				<tr>
					<td>
						&nbsp &nbsp <b>Тип оборудования</b>
						<br>
						<select class="selectpicker" name="tipob">
							<option value='Сигнализацмя'>Сигнализация</option>
							<option value="Камера">Камера</option>
                            <option value='Телефония/Локальные сети'>Телефония/локальные сети</option>
                            <option value='Системы контроля доступа'>Системы контроля доступа</option>
                        </SELECT>
				
					</td>
				                </tr>
                <tr>
					<td>
						<button type="submit" class="btn-primary">Купить оборудование</button>
					</td>
            	</tr>
				
			</table>
		</form>

        <table id="example" class="display" cellspacing="0" width="100%">

            <thead>
            <tr>
                <th>Номер оборудования</th>
                <th>Наименование оборудования</th>
                <th>Поставщик</th>
                <th>Вендор</th>
                <th>Тип оборудования</th>
                <th>Количество</th>
                <th>Стоимость одного устройства</th>
            </tr>
            </thead>
            <tbody>
            <?php

            foreach  ($index as $row):?>
                <tr>
                    <td><?=$row["id_obor"];?></td>
                    <td><?=$row["nameobor"];?></td>
                    <td><?=$row["post"]?></td>
                    <td><?=$row["vend"]?></td>

                    <td><?=$row["typobor"];?></td>
                    <td><?=$row["kolkop"];?></td>
                    <td><?=$row["stom"];?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>

        </table>


