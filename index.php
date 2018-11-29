<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	".default", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4, 5",
		"IBLOCK_TYPE" => "Practice",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "2",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
<div class="container">
	<div>
		<h1>Юридические услуги и консультация юриста в Орле</h1>
	</div>
	<div class="service-block row">
		<div class="service-box col-xs-12 col-sm-6">
 <a href="/uslugi/dlya-grazhdan.html">
			<div class="service-box-heading">
				 Услуги для граждан
			</div>
			<div class="service-box-image">
 <img src="/bitrix/templates/imeyu/images/for-citizens.jpg" alt="" style="width: 427px; height: 246px; top: 0px; left: 0px;">
			</div>
 </a>
		</div>
		<div class="service-box for-business col-xs-12 col-sm-6">
 <a href="/uslugi/dlya-biznesa.html">
			<div class="service-box-heading">
				 Услуги для бизнеса
			</div>
			<div class="service-box-image">
 <img src="/bitrix/templates/imeyu/images/for-business.jpg" alt="" style="width: 427px; height: 246px; top: 0px; left: 0px;">
			</div>
 </a>
		</div>
	</div>
	 <!--service-block-->
</div>
<div class="guarantee-block">
	<div class="container">
		<h2 class="guarantee-block-heading"> <span>Вы гарантированно</span> получите </h2>
		<div class="row">
			<div class="guarantee-box col-xs-12 col-sm-3">
				<div class="guarantee-image">
 <img src="/bitrix/images/free.png" class="free-img" alt="">
				</div>
				<h3 class="guarantee-heading">Первичная консультация</h3>
			</div>
			<div class="guarantee-box col-xs-12 col-sm-3">
				<div class="guarantee-image">
 <img src="/bitrix/images/93.png" alt="">
				</div>
				<h3 class="guarantee-heading">Успешное решение Вашей проблемы</h3>
			</div>
			<div class="guarantee-box col-xs-12 col-sm-3">
				<div class="guarantee-image">
 <img src="/bitrix/images/96.png" alt="">
				</div>
				<h3 class="guarantee-heading">Вы останетесь довольны нашей работой</h3>
			</div>
			<div class="guarantee-box col-xs-12 col-sm-3">
				<div class="guarantee-image">
 <img src="/bitrix/images/100.png" alt="">
				</div>
				<h3 class="guarantee-heading">Возврат гонорара<br>
				 при недостижении результата</h3>
			</div>
		</div>
		 <!--row-->
	</div>
	 <!--container-->
</div>
 <!--guarantee-block--> <br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"form1_main",
	Array(
		"EMAIL_TO" => "newimeyu@yandex.ru",
		"EVENT_MESSAGE_ID" => "",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => "",
		"USE_CAPTCHA" => "Y"
	)
);?><br>
<div class="how-block">
	<h2 class="how-block-heading">Как мы решаем Вашу проблему</h2>
	<div class="tablet-red">
		<div class="container">
			<div class="row">
				<div class="how-box how-box-red col-xs-12 col-sm-6 col-lg-4">
					<h3 class="how-box-heading">Консультируем</h3>
					<p class="how-short">
						 Вы связываетесь с нами,<br>
						 и мы бесплатно:
					</p>
					<div class="how-number">
 <span>1</span>
					</div>
					<ul class="how-list">
						<li>Проводим правовой анализ ситуации</li>
						<li>Даем заключение о перспективах дела</li>
						<li>Информируем о рисках</li>
						<li>Ориентируем по стоимости</li>
					</ul>
 <button type="button" class="btn btn-white" data-toggle="modal" data-target="#consultModal">
					Проконсультироваться </button>
				</div>
				 <!--how-box-->
				<div class="how-box col-xs-12 col-sm-6 col-lg-4">
					<h3 class="how-box-heading">Планируем</h3>
					<p class="how-short">
						 Мы приступаем к решению проблемы:
					</p>
					<div class="how-number">
 <span>2</span>
					</div>
					<ul class="how-list">
						<li>Заключаем договор</li>
						<li>Разрабатываем поэтапный план действий</li>
						<li>Собираем и анализируем необходимые доказательства</li>
						<li>Сводим к минимуму возможные риски</li>
					</ul>
				</div>
				<div class="how-box how-box-red how-box-last col-xs-12 col-sm-6 col-lg-4">
					<h3 class="how-box-heading">Решаем</h3>
					<p class="how-short">
						 Действуем по выбранному плану:
					</p>
					<div class="how-number">
 <span>3</span>
					</div>
					<ul class="how-list">
						<li>Готовим и подаем нужные документы</li>
						<li>Защищаем Ваши права в суде и иных компетентных органах</li>
						<li>Контролируем реализацию Ваших прав</li>
						<li>Передаем результат нашей работы</li>
					</ul>
				</div>
			</div>
			 <!--row-->
		</div>
		 <!--container-->
	</div>
</div>
<div class="container">
	<div class="pavel-block">
		<div class="pavel-box">
			<div class="row">
				<div class="pavel-image col-xs-12 col-sm-4">
 <img src="/bitrix/images/d-pravo-kontakt-f.jpg" alt="Павел">
				</div>
				<div class="pavel-info col-xs-12 col-sm-8">
					<div class="pavel-header">
						<h2 class="pavel-heading">Павел Тарасов</h2>
						<p class="pavel-about">
							 Управляющий партнер Центра «Имею Право»,<br>
							 член Ассоциации юристов России
						</p>
					</div>
					<p class="pavel-text">
					</p>
					<p>
						 В своей работе я руководствуюсь принципом, что «если <strong>можно</strong> сделать что-то максимально хорошо, то <strong>нужно</strong> сделать это максимально хорошо», и требую такого же подхода от своих коллег.
					</p>
					<p>
						 Мы заботимся о наших Клиентах и стараемся всегда выполнять данные обещания, а я несу персональную ответственность за качество наших услуг.
					</p>
					<p>
						 Поэтому я готов отложить свои дела, если Вам понадобилась поддержка или ответы по вопросам, требующим особого внимания, а также лично рассмотреть Ваши предложения, идеи и отзывы.
					</p>
					<p>
					</p>
 <button type="button" class="btn btn-red" data-toggle="modal" data-target="#pavelModal">Написать Павлу</button>
				</div>
				 <!--pavel-info-->
			</div>
			 <!--row-->
		</div>
		 <!--pavel-box-->
	</div>
	 <!--pavel-block-->
</div>
<!-- container --><?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>