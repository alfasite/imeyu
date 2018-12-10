<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Движение дел оказание юридических услуг представление интересов в судах орла  бесплатная юридическая консультация в орле");
$APPLICATION->SetTitle("Движение дел. ЦПУ \"ИМЕЮ ПРАВО\".Оказание юридических услуг г.Орел");
$APPLICATION->SetPageProperty("title", "Движение дел. ЦПУ \"ИМЕЮ ПРАВО\".Оказание юридических услуг г.Орел");
?><div class="breadcrumbs container">
	<ul>
		<ul class="B_crumbBox">
			<li class="B_firstCrumb" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="B_homeCrumb" itemprop="url" rel="Home" href="https://xn----8sbgjoysfj1l.xn--p1ai/"><span itemprop="title">Главная</span></a></li>
			<li class="B_lastCrumb" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="B_currentCrumb" itemprop="url" rel="Движение дел оказание юридических услуг представление интересов в судах орла бесплатная юридическая консультация в орле" href="/practice.html"><span itemprop="title">Наша практика</span></a></li>
		</ul>
	</ul>
</div>
 <!--breadcrumbs-->
<div class="catalog-block container">
	<div>
		<h1>Наша практика</h1>
	</div>
	<div class="cat-service-block-row">
		<div class="service-block row">
			<div class="service-box col-xs-12 col-sm-6">
 <a href="/practice/dela-grazhdan.html">
				<div class="service-box-heading">
					 Дела граждан
				</div>
				<div class="service-box-image">
 <img src="/bitrix/images/for-citizens.jpg" alt="" style="width: 427px; height: 246px; top: 0px; left: 0px;">
				</div>
 </a>
			</div>
			<div class="service-box col-xs-12 col-sm-6">
 <a href="/practice/dela-yuridicheskix-licz.html">
				<div class="service-box-heading">
					 Дела организаций и ИП
				</div>
				<div class="service-box-image">
 <img src="/bitrix/images/for-business.jpg" alt="" style="width: 427px; height: 246px; top: 0px; left: 0px;">
				</div>
 </a>
			</div>
		</div>
		 <!--row-->
	</div>
</div>
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"template_for_imey1",
	Array(
		"EMAIL_TO" => "newimeyu@yandex.ru",
		"EVENT_MESSAGE_ID" => array(),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(),
		"USE_CAPTCHA" => "Y"
	)
);?>
<div class="catalog-block container">
	<p>
		 Центр правовых услуг «Имею Право» предлагает <strong>гражданам, индивидуальным предпринимателям и юридическим лицам</strong> комплексную правовую помощь, в том числе:
	</p>
	<ul>
		<li>устные и письменные консультации по вопросам различных отраслей права, правовой анализ документов;</li>
		<li>подготовка правовых документов: исковых заявлений, претензий, возражений, апелляционных, кассационных, иных жалоб, различного рода договоров и соглашений;</li>
		<li>представление интересов в районных судах и судебных участках мировых судей г. Орла, Орловского района, районах Орловской области, Орловском областном суде; районных судах г. Москвы; Арбитражном суде Орловской области, Девятнадцатом арбитражном апелляционном суде в г. Воронеж, Федеральном арбитражном суде Центрального округа, судах Черноземья в целом;</li>
		<li>представление интересов физических лиц, индивидуальных предпринимателей и юридических лиц в госорганах;</li>
		<li>​досудебное разрешение споров, в том числе проведение переговоров с контрагентами;</li>
		<li>оформление и сопровождение сделок с недвижимым имуществом;</li>
		<li>помощь в регистрации/ликвидации ООО и ИП;</li>
		<li>​сопровождение процедуры банкротства физических лиц;</li>
		<li>взыскание долгов, сопровождение исполнительного производства;</li>
		<li>юридический аутсорсинг (юридическое обслуживание, сопровождение).</li>
	</ul>
	<p>
 <strong>Мы делаем юридическую помощь доступной для широкого круга лиц</strong>, зачастую используя принцип «pro bono» (от лат. «pro bono publico» - ради общественного блага), поэтому у нас Вы имеете право <strong>получить бесплатные консультации</strong> по общим вопросам различных отраслей законодательства.
	</p>
	<p>
		 Обратившись к нам, Вы получаете гарантию конфиденциальности предоставленной информации, индивидуальный подход к решению поставленных задач квалифицированными специалистами и, как следствие, - профессиональное решение правовых проблем в необходимые сроки.
	</p>
</div>
 <!--catalog-block-->`<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>