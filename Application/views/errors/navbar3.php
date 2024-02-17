<?php
$this->load->helper('url');
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" <?php echo anchor('Rizar/index', 'Авторизация')?>  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar1">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <div class="btn-group">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 25%;" onclick=" $('.dropdown-toggle').dropdown()">
                        Администратор
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" <? echo anchor('Obor/index', 'Закупка оборудования')?></a>
                        <a class="dropdown-item" <? echo anchor('Usl/index', 'Корректировка перечня услуг')?></a>
                        <a class="dropdown-item" <? echo anchor('Nar/index', 'Составление ТЗ')?></a>
                        <a class="dropdown-item" <? echo anchor('UDog/index', 'Подписание договора')?> </a>
                        <a class="dropdown-item" <? echo anchor('RasNar/index', 'Распределение наряда')?> </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" <? echo anchor('Formspis/index', 'Формирование списка оборудования')?> </a>
                        <a class="dropdown-item" <? echo anchor('Otch/index4', 'Отображение сведений о закрытых нарядах за период')?></a>
                    </div>
                </div>

            </li>
		    <li class="nav-item active">
                <div class="btn-group">
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 25%;" onclick=" $('.dropdown-toggle').dropdown()">
                        Бухгалтер
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" <? echo anchor('Opl/index', 'Ввод и корректировка стоимости оплаты')?> </a>
                        <a class="dropdown-item" <? echo anchor('Uslugup/index', 'Корректировка стоимости услуги')?> </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" <? echo anchor('Otch/index5', 'Отображение сведений стоимости  работ за период')?></a>
                        <a class="dropdown-item" <? echo anchor('Otch/index6', 'Отображение сведений о внеплановых  расходах за период')?></a>
                        <a class="dropdown-item" <? echo anchor('Otch/index7', 'Отображение сведений акта сверки за период')?></a>
                    </div>
                </div>
		    </li>
			<li class="nav-item active">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 25%;" onclick=" $('.dropdown-toggle').dropdown()">
                        Клиент
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" <? echo anchor('Dog/index', 'Оформление заявки')?> </a>
                        <a class="dropdown-item" <? echo anchor('zakNar/index', 'Закрыть наряд')?> </a>
                    </div>
                </div>
		    </li>
            <li class="nav-item active">
                <div class="btn-group">
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 25%;" onclick="$('.dropdown-toggle').dropdown()">
                        Директор
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" <? echo anchor('Rab/index', 'Найм работника')?></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" <? echo anchor('Otch/index', 'Отображение сведений о заключенных  договорах с клиентами за период')?></a>
                        <a class="dropdown-item" <? echo anchor('Otch/index2', 'Отображение сведений о выполненных нарядах за период')?></a>
                        <a class="dropdown-item" <? echo anchor('Otch/index3', 'Отображения сведений рейтинга услуг за период')?></a>
                    </div>
                </div>

             </li>

        </ul>
        </div>
	</div>
</nav>
