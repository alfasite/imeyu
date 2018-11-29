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

<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"horizontal_multilevel", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "top",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "horizontal_multilevel"
	),
	false
);?>

    <ul class="container"><li><span role="button" data-toggle="collapse">Услуги</span><ul id="serviceAll" class="panel-collapse collapse" role="tablist"><li><a href="/uslugi/dlya-grazhdan.html">Для граждан</a></li>
<li><a href="/uslugi/dlya-biznesa.html">Для бизнеса</a></li>
</ul></li>
<li><span role="button" data-toggle="collapse">Наша практика</span><ul id="serviceAll" class="panel-collapse collapse" role="tablist"><li><a href="/practice/dela-grazhdan.html">Дела граждан</a></li>
<li><a href="/practice/dela-yuridicheskix-licz.html">Дела юридических лиц и ИП</a></li>
</ul></li>
<li><a href="/otzyivyi.html">Отзывы</a></li>
<li><a href="/news.html">Статьи и новости</a></li>
<li><a href="/prices-services.html">Стоимость</a></li>
<li class="act"><span>О нас</span></li>
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

