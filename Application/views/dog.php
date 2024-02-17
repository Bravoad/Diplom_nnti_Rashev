<?php
$this->load->database();
?>
<div class="content">
    <form  method="post"  role="form" class="form-inline"  action="http://Rizar:8080/index.php/Klient/Insert">
        <div class="form-group mb-lg-0 col-lg-offset-0">
            <table>
                <tr>
                    <td>
                        &nbsp     <b>Наименование клиента</b>
                        <br>
                        <input type="text" class="form-control" name="kli" placeholder="Введите клиента">
                    </td>
                    <td>
                        &nbsp &nbsp <b>Адрес</b>
                        <br>
                        <input type="text" class="form-control" name="adr" placeholder="Введите  адрес">
                    </td>
                </tr>
                <tr>
                    <td>
                        &nbsp     <b>ИНН</b>
                        <br>
                        <input type="text" class="form-control" name="inn" placeholder="Введите ИНН">
                    </td>
                    <td>
                        <label for="">&nbsp <b>Банковские реквизиты</b></label>
                        <br>
                        <input type="text" class="form-control"  name="bank" placeholder="Введите банковские реквизиты" requered>
                    </td>
                </tr>
                <tr>
                    <td>
                        &nbsp     <b>Телефон</b>
                        <br>
                        <input type="text" class="form-control" name="tel" placeholder="Введите телефон">
                    </td>
                    <td>
                        <label for="">&nbsp <b>Дата заявки</b></label>
                        <br>
                        <input type="date" class="form-control"  name="dat" placeholder="Введите дату заявки" requered>
                    </td>
                </tr>
                <tr>
                    <td><div class="form-group purple-border">
                            <label for="exampleFormControlTextarea4">     &nbsp &nbsp<b> Описание </b></label>
                            <br>
                            <textarea class="form-control" name="opis" id="exampleFormControlTextarea4" rows="2"></textarea>
                        </div></td>

                    <td>
                        <button type="submit" class="btn-primary">Заключить договор</button>
                    </td>
                </TR>
            </table>
        </div>
    </form>


