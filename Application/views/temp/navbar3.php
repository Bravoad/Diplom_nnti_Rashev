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
                        <a class="dropdown-item" <? echo anchor('Rab/index', 'Найм работника')?></a>
                        <a class="dropdown-item" <? echo anchor('Usl/index', 'Корректировка перечня услуг')?></a>
                    </div>
                </div>

            </li>
		    <li class="nav-item active">
                <div class="btn-group">
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 25%;" onclick=" $('.dropdown-toggle').dropdown()">
                        Отчёты
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" <? echo anchor('Otch/index', 'Отображение сведений о заключенных  договорах с клиентами за период')?></a>
                        <a class="dropdown-item" <? echo anchor('Otch/index2', 'Отображение сведений о выполненных нарядах за период')?></a>
                        <a class="dropdown-item" <? echo anchor('Otch/index3', 'Отображения сведений рейтинга услуг за период')?></a>
                    </div>
                </div>
		    </li>

        </ul>
        </div>
</nav>
