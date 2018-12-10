<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Схема проезда. ЦПУ \"ИМЕЮ ПРАВО\".Оказание юридических услуг г.Орел");
$APPLICATION->SetPageProperty("description", "Схема проезда оказание юридических услуг представление интересов в судах орла  бесплатная юридическая консультация в орле");
$APPLICATION->SetTitle("Контакты");
?><div class="page-content">
	<div class="catalog-block container">
		<div>
			<h1><?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "bread_2", Array(
	"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
		"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
		"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>Контакты</h1>
		</div>
		<p>
 <a href="/bitrix/images/imeu-pravo-kontakt-b.jpg" data-lightbox="image-1"> <img src="/bitrix/images/imeu-pravo-kontakt-m.jpg" class="rightimg" alt=""> </a>
		</p>
		<div class="cont-bl">
			<p>
 <span class="cont"><span class="cont_strong">Звоните:</span></span>
			</p>
			<p>
 <span class="cont"><span class="cont_strong">+7 (4862) 784-784</span></span>
			</p>
			<p>
 <span class="cont"><span class="cont_strong">+7 (909) 229-11-00</span></span>
			</p>
		</div>
		<div class="cont-bl">
			<p>
 <span class="cont"><span class="cont_strong">Пишите:</span></span>
			</p>
			<p>
 <a href="mailto:pravo@784784.ru">pravo@784784.ru</a>
			</p>
		</div>
		<div class="cont-bl">
			<p>
 <span class="cont"><span class="cont_strong">Приходите:</span></span>
			</p>
			<p>
 <span class="cont">Адрес: г. Орел, ул. Тургенева, д. 19</span>
			</p>
		</div>
		<div class="cont-bl">
			<p>
 <span class="cont"><span class="cont_strong">Мы ВКонтакте:</span></span>
			</p>
			<p>
 <a href="https://vk.com/i_have_the_right" target="_blank">vk.com/i_have_the_right</a>
			</p>
		</div>
		<div class="cont-bl">
			<p>
 <span class="cont"><span class="cont_strong">Режим работы:</span></span>
			</p>
			<p>
 <span class="cont">Понедельник – Пятница: <span class="cont_strong">09:00 – 18:00</span></span>
			</p>
			<p>
				 Суббота – Воскресенье: <span class="cont_strong">выходной</span>
			</p>
			<p>
 <span class="cont">По договоренности встреча может быть назначена в удобное для Вас время, включая выходные и праздничные дни.</span>
			</p>
			<h1>Как добраться:</h1>
			 <script charset="utf-8" type="text/javascript" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4ae63dc5f58aab4fda5076f2dfddf30ec6f6da0a28353eb1a023679913d86ca0&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=false"></script>
		</div>
		 <script type="application/ld+json">// <![CDATA[
{
  "@context": "http://www.schema.org",
  "@type": "Organization",
  "name": "ЦПУ «Имею Право»",
  "url": "https://xn----8sbgjoysfj1l.xn--p1ai/",
  "logo": "https://xn----8sbgjoysfj1l.xn--p1ai/images/logo.png",
  "image": "https://xn----8sbgjoysfj1l.xn--p1ai/images/imeu-pravo-kontakt-m.jpg",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "ул. Тургенева, д. 19",
    "addressLocality": "г. Орел",
    "postalCode": "302028",
    "addressCountry": "Россия"
  },
  "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "+7 (4862) 784-784",
    "contactType" : "customer service"
  },{
  "@type" : "ContactPoint",
  "telephone" : "+7 (909) 229-11-00",
  "contactType" : "customer service"
}]
}
// ]]></script>
	</div>
	 <!--catalog-block-->
</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"template_for_imey1",
	Array(
		"EMAIL_TO" => "newimeyu@yandex.ru",
		"EVENT_MESSAGE_ID" => array("7"),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array("NONE"),
		"USE_CAPTCHA" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>