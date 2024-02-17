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
                        Ввод и изменение
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" <? echo anchor('Obor/index', 'Закупка оборудования')?></a>
                        <a class="dropdown-item" <? echo anchor('Nar/index', 'Составление ТЗ')?></a>
                        <a class="dropdown-item" <? echo anchor('UDog/index', 'Подписание договора')?> </a>
                        <a class="dropdown-item" <? echo anchor('RasNar/index', 'Распределение наряда')?> </a>
                        <a class="dropdown-item" <? echo anchor('zakNar/index', 'Закрыть наряд')?> </a>
                        <a class="dropdown-item" <? echo anchor('UDog/index2', 'Ввод акта о выполнении договора')?> </a>
                    </div>

            </li>
		    <li class="nav-item active">
                <div class="btn-group">
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 25%;" onclick=" $('.dropdown-toggle').dropdown()">
                        Отчёты
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" <? echo anchor('Formspis/index', 'Формирование списка оборудования')?> </a>
                        <a class="dropdown-item" <? echo anchor('Otch/index4', 'Отображение сведений о закрытых нарядах за период')?></a>
                    </div>
                </div>
		    </li>

        </ul>
        </div>
</nav>
