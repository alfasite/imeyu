<!DOCTYPE html>
<html lang="ru">
    <head>
	<?$APPLICATION->ShowHead()?>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel='shortcut icon' type='image/x-icon' href='/favicon.ico' />
	<title><?$APPLICATION->ShowTitle()?></title>

	<meta name="format-detection" content="telephone=no">

	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/bootstrap.min.css">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/lightbox.css">

	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/template_styles.css">

	
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40182025-1', 'auto');
  ga('send', 'pageview');

</script>
	
</head>

    <body>
<?$APPLICATION->ShowPanel();?>
<div class="mobile-top hidden-lg hidden-md">
	<!--button type="button" class="nav-close"></button-->
	<button type="button" class="navbar navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse" aria-expanded="false">
	<button type="button" class="btn btn-white" data-toggle="modal" data-target="#consultModal">
	    Проконсультироваться
	</button>
</div>
<nav class="page-nav collapse navbar-collapse" id="bs-example-navbar-collapse">
<!--
<?$APPLICATION->IncludeComponent("bitrix:menu", "horizontal_multilevel2", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "top",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "2",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"COMPONENT_TEMPLATE" => "horizontal_multilevel"
	),
	false
);?>
-->
    <ul class="container"><li><span role="button" data-toggle="collapse">Услуги</span><ul id="serviceAll" class="panel-collapse collapse" role="tablist"><li><a href="/uslugi/dlya-grazhdan.html">Для граждан</a></li>
<li><a href="/uslugi/dlya-biznesa.html">Для бизнеса</a></li>
</ul></li>
<li><span role="button" data-toggle="collapse">Наша практика</span><ul id="serviceAll" class="panel-collapse collapse" role="tablist"><li><a href="/practice/dela-grazhdan.html">Дела граждан</a></li>
	<li><a href="/practice/dela-yuridicheskix-licz.html" style="font-size: 15px;">Дела юридических лиц и ИП</a></li>
</ul></li>
<li><a href="/otzyivyi.html">Отзывы</a></li>
<li><a href="/news.html">Статьи и новости</a></li>
<li><a href="/prices-services.html">Стоимость</a></li>
<li><a href="/o-nas.html">О нас</a></li>
<li><a href="/contacts.html">Контакты</a></li>
</ul>
 </nav>
        <div class="page">
            <div class="pn-fixed" style="display: block;">
    <a href="#" id="toTop">
    </a>
</div>
<header class="page-header container">
 <a href="/" class="header-logo">
 	<img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="Логотип" title="Центр правовых услуг">
 </a> <!--header-logo-->
<div class="page-heading">    
	<span style="font-size: 30px; font-family: franklingothicdemic, sans-serif">Юридические услуги для граждан и бизнеса

	    </span><!--	<span class="sub_title">для граждан и бизнеса</span>-->
	<button type="button" class="btn btn-black visible-lg" data-toggle="modal" data-target="#consultModal">
	    Проконсультироваться
	</button>
</div> <!--page-heading-->
<div class="header-contacts">
	<div class="header-contacts-separate1">
		<p class="call-us">Позвоните и проконсультируйтесь</p>
		<a class="header-phone" href="tel:+74862784784">(4862) <span>784-784</span></a>
	</div>
	<div class="header-contacts-separate2">
		<a class="header-mail" href="mailto:pravo@784784.ru">pravo@784784.ru</a>
		<div class="header-address"><a href="/contacts.html">г. Орел, ул. Тургенева, 19</a></div>
		<div class="header-vk"><a href="https://vk.com/i_have_the_right" target="_blank">Мы ВКонтакте</a></div>
	</div>
</div> <!--header-contacts-->
</header> <!--page-header-->

<div class="page-content">
<!--
<div class="breadcrumbs container">
 	<ul>
 		<ul class="B_crumbBox"><li class="B_firstCrumb" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="B_homeCrumb" itemprop="url" rel="Home" href="http://imeyu.alfa.space"><span itemprop="title">Главная</span></a></li>
  <li itemscope="itemscope" class="B_crumb" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="B_crumb" itemprop="url" rel="✔ Центр Правовых Услуг ★★★★★ «ИМЕЮ ПРАВО» в Орле, Предоставляет услуги как для граждан, так и для бизнеса ➡ Узнать подробнее ✔" href="/uslugi.html"><span itemprop="title">Услуги</span></a></li>
  <li class="B_lastCrumb" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="B_currentCrumb" itemprop="url" rel="✔ Центр Правовых Услуг ★★★★★ «ИМЕЮ ПРАВО» Предоставляет юридические услуги для граждан, наш юрист по жилищным вопросам решит все жилищные споры ➡ Узнать подробнее ✔" href="/uslugi/dlya-grazhdan.html"><span itemprop="title">Для граждан</span></a></li>
</ul>
 	</ul>
 </div>
-->
