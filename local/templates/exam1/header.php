<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?$APPLICATION->ShowHead();?>
<link href="<?=SITE_TEMPLATE_PATH?>/common.css" type="text/css" rel="stylesheet" />
<link href="<?=SITE_TEMPLATE_PATH?>/colors.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/reset.css" />
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style.css" />
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/owl.carousel.css" />
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/owl.carousel.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/scripts.js"></script>
<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
<div class="wrap">
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<?$adr=$APPLICATION->GetCurPage();?>
<header class="header">
    <div class="inner-wrap">
        <div class="logo-block"><a href="" class="logo">Мебельный магазин</a>
        </div>
        <div class="main-phone-block">
            <a href="tel:84952128506" class="phone"><?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/file.php"
	)
);?></a>
            <div class="shedule">время работы с 9-00 до 18-00</div>
        </div>
        <div class="actions-block">
            <form action="/" class="main-frm-search">
                <input type="text" placeholder="Поиск">
                <button type="submit"></button>
            </form>
            <nav class="menu-block">
                <ul>
                    <li class="att popup-wrap">
                        <a id="hd_singin_but_open" href="" class="btn-toggle">Войти на сайт</a>
                        <form action="/" class="frm-login popup-block">
                            <div class="frm-title">Войти на сайт</div>
                            <a href="" class="btn-close">Закрыть</a>
                            <div class="frm-row"><input type="text" placeholder="Логин"></div>
                            <div class="frm-row"><input type="password" placeholder="Пароль"></div>
                            <div class="frm-row"><a href="" class="btn-forgot">Забыли пароль</a></div>
                            <div class="frm-row">
                                <div class="frm-chk">
                                    <input type="checkbox" id="login">
                                    <label for="login">Запомнить меня</label>
                                </div>
                            </div>
                            <div class="frm-row"><input type="submit" value="Войти"></div>
                        </form>
                    </li>
                    <li><a href="">Зарегистрироваться</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- /header -->
<!-- nav -->
<nav class="nav">
    <div class="inner-wrap">
        <div class="menu-block popup-wrap">
            <a href="" class="btn-menu btn-toggle"></a>
            <div class="menu popup-block">
                <ul class="">
                    <li class="main-page"><a href="">Главная</a>
                    </li>
                    <li>
                        <a href="">Компания</a>
                        <ul>
                            <li>
                                <a href="">Пункт 1</a>
                                <ul>
                                    <li><a href="">Пункт 1</a>
                                    </li>
                                    <li><a href="">Пункт 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="">Пункт 2</a>
                            </li>
                            <li><a href="">Пункт 3</a>
                            </li>
                            <li><a href="">Пункт 4</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="">Новости</a>
                    </li>
                    <li>
                        <a href="">Каталог</a>
                        <ul>
                            <li>
                                <a href="">Пункт 1</a>
                                <ul>
                                    <li><a href="">Пункт 1</a>
                                    </li>
                                    <li><a href="">Пункт 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="">Пункт 2</a>
                            </li>
                            <li><a href="">Пункт 3</a>
                            </li>
                            <li><a href="">Пункт 4</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="">Фотогалерея</a>
                    </li>
                    <li><a href="">Партнерам</a>
                    </li>
                    <li><a href="">Контакты</a>
                    </li>
                </ul>
                <a href="" class="btn-close"></a>
            </div>
            <div class="menu-overlay"></div>
        </div>
    </div>
</nav>
<?if($adr!="/"):?>
<div class="breadcrumbs-box">
    <div class="inner-wrap">
      <?$APPLICATION->IncludeComponent(
      	"bitrix:breadcrumb",
      	"breadcrumb",
      	Array(
      		"PATH" => "",
      		"SITE_ID" => "s1",
      		"START_FROM" => "0"
      	)
      );?><br>
    </div>
</div>
<?endif?>
<!-- /nav -->
<!-- page -->
<div class="page">
    <!-- content box -->
    <div class="content-box">
        <!-- content -->
        <div class="content">
            <div class="cnt">
<?if($adr=="/"):?>
    <p>«Мебельная компания» осуществляет производство мебели на высококлассном оборудовании с применением минимальной доли ручного труда, что позволяет обеспечить высокое качество нашей продукции. Налажен производственный процесс как массового и индивидуального характера, что с одной стороны позволяет обеспечить постоянную номенклатуру изделий и индивидуальный подход – с другой.
    </p>


    <!-- index column -->
            <div class="cnt-section index-column">
                <div class="col-wrap">

                    <!-- main actions box -->
                    <div class="column main-actions-box">
                      <div class="title-block">
                            <h2>Новинки</h2>
                             <hr>
                        </div>
                          <div class="items-wrap">
                            <div class="item-wrap">
                                <div class="item">
                                    <div class="title-block att">
                                        Угловой диван!
                                    </div>
                                    <br>
                                    <div class="inner-block">
                                        <a href="" class="photo-block">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/new01.jpg" alt="">
                                        </a>
                                        <div class="text"><a href="">Угловой диван "Титаник",  с большим выбором расцветок и фактур.</a>
                                        <a href="" class="btn-arr"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-wrap">
                                <div class="item">
                                    <div class="title-block att">
                                        Угловой диван!
                                    </div>
                                    <br>
                                    <div class="inner-block">
                                        <a href="" class="photo-block">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/new02.jpg" alt="">
                                        </a>
                                        <div class="text"><a href="">Угловой диван "Титаник",  с большим выбором расцветок и фактур.</a>
                                        <a href="" class="btn-arr"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-wrap">
                                <div class="item">
                                    <div class="title-block att">
                                        Угловой диван!
                                    </div>
                                    <br>
                                    <div class="inner-block">
                                        <a href="" class="photo-block">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/new03.jpg" alt="">
                                        </a>
                                        <div class="text"><a href="">Угловой диван "Титаник",  с большим выбором расцветок и фактур.</a>
                                        <a href="" class="btn-arr"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="" class="btn-next">Все новинки</a>
                    </div>
                    <!-- /main actions box -->
                    <!-- main news box -->
                    <div class="column main-news-box">
                        <div class="title-block">
                            <h2>Новости</h2>
                        </div>
                        <hr>
                        <div class="items-wrap">
                            <div class="item-wrap">
                                <div class="item">
                                    <div class="title"><a href="">29 августа 2012</a>
                                    </div>
                                    <div class="text"><a href="">Поступление лучших офисных кресел из Германии </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-wrap">
                                <div class="item">
                                    <div class="title"><a href="">29 августа 2012</a>
                                    </div>
                                    <div class="text"><a href="">Мастер-класс дизайнеров  из Италии для производителей мебели </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-wrap">
                                <div class="item">
                                    <div class="title"><a href="">29 августа 2012</a>
                                    </div>
                                    <div class="text"><a href="">Поступление лучших офисных кресел из Германии </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-wrap">
                                <div class="item">
                                    <div class="title"><a href="">29 августа 2012</a>
                                    </div>
                                    <div class="text"><a href="">Наша дилерская сеть расширилась теперь ассортимент наших товаров доступен в Казани </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="" class="btn-next">Все новости</a>
                    </div>
                    <!-- /main news box -->

                </div>
            </div>
            <!-- /index column -->

              <!-- afisha box -->
            <div class="cnt-section afisha-box">
                <div class="section-title-block">
                    <h2 class="second-ttile">Ближайшие мероприятия</h2>
                    <a href="" class="btn-next">все мероприятия</a>
                </div>
                <hr>
                <div class="items-wrap">
                    <div class="item-wrap">
                        <div class="item">
                            <div class="title"><a href="">29 августа 2012, Москва</a>
                            </div>
                            <div class="text"><a href="">Семинар производителей мебели России и СНГ, Обсуждение тенденций.</a>
                            </div>
                        </div>
                    </div>
                    <div class="item-wrap">
                        <div class="item">
                            <div class="title"><a href="">29 августа 2012, Москва</a>
                            </div>
                            <div class="text"><a href="">Открытие шоу-рума на Невском проспекте. Последние модели в большом ассортименте.</a>
                            </div>
                        </div>
                    </div>
                    <div class="item-wrap">
                        <div class="item">
                            <div class="title"><a href="">29 августа 2012, Москва</a>
                            </div>
                            <div class="text"><a href="">Открытие нового магазина в нашей  дилерской сети.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?else:?>
	<h1 id="pagetitle"><?$APPLICATION->ShowTitle(false);?></h1>
<?endif?>
