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
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 25%;" onclick=" $('.dropdown-toggle').dropdown()">
                        Ввод и изменение
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" <? echo anchor('Opl/index', 'Ввод и корректировка стоимости оплаты')?> </a>
                        <a class="dropdown-item" <? echo anchor('Uslugup/index', 'Корректировка стоимости услуги')?> </a>
                     </div>
                </div>
		    </li>
			<li class="nav-item active">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 25%;" onclick=" $('.dropdown-toggle').dropdown()">
                        Отчёты
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" <? echo anchor('Otch/index5', 'Отображение сведений стоимости  работ за период')?></a>
                        <a class="dropdown-item" <? echo anchor('Otch/index6', 'Отображение сведений о внеплановых  расходах за период')?></a>
                        <a class="dropdown-item" <? echo anchor('Otch/index7', 'Отображение сведений акта сверки за период')?></a>
                    </div>
                </div>
		    </li>


        </ul>
        </div>
	</div>
</nav>
