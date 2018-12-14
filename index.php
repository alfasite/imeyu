<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("description", "Центр Правовых Услуг «ИМЕЮ ПРАВО» оказывает юридические услуги и правовую помощь в Орле: проводит бесплатные консультации адвоката, услуги представителя в суде для физических и юридических лиц.");
$APPLICATION->SetTitle("Юридические услуги в Орле, бесплатная консультация юриста и адвоката, судебное представительство - Имею Право");
$APPLICATION->SetPageProperty("title", "Юридические услуги в Орле, бесплатная консультация юриста и адвоката, судебное представительство - Имею Право");
?><div class="container">
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
	"template_for_imey1",
	Array(
		"EMAIL_TO" => "newimeyu@yandex.ru",
		"EVENT_MESSAGE_ID" => array("10"),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array("NONE"),
		"USE_CAPTCHA" => "N"
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
	<div class="practice-block">
		<h2 class="practice-block-heading"> <span>Практика Центра «Имею Право»</span></h2>
		<div class="row" style="position: relative; height: 900px;">
			<div class="case-box col-xs-12 col-lg-6" style="display: block; position: absolute; left: 0px; top: 0px;">
				<div class="case-label">
					 Дело №5060
				</div>
				<h3 class="case-heading">Взыскание задолженности за недопоставку товара по договору</h3>
				<ul class="case-list">
					<li class="case-item case-problem">
					<h4 class="case-item-name">Проблема:</h4>
					<div class="case-item-text">
						<p>
							 Часть товара по договору была оплачена, но не поставлена ввиду возникших разногласий
						</p>
					</div>
 </li>
					<li class="case-item case-work">
					<h4 class="case-item-name">Проделанная работа:</h4>
					<div class="case-item-text">
						<p>
							 • Правовой анализ ситуации, консультирование и разработка стратегии ведения дела
						</p>
						<p>
							 • Подготовка и направление искового заявления в АС Нижегородской области
						</p>
						<p>
							 • Представление интересов Клиента в суде первой инстанции
						</p>
						<p>
							 • Приведение к исполнению решения суда
						</p>
					</div>
 </li>
					<li class="case-item case-decision">
					<h4 class="case-item-name">Решение:</h4>
					<div class="case-item-text">
						<p>
 <a href="/files/Решения/5060 (1).pdf">Решение суда</a>
						</p>
					</div>
 </li>
					<li class="case-item case-result">
					<h4 class="case-item-name">Результат:</h4>
					<div class="case-item-text">
						<p>
							 Иск был удовлетворен в полном объеме, с контрагента взыскано более 900 тысяч рублей, установлен механизм начисления процентов
						</p>
					</div>
 </li>
				</ul>
			</div>
			 <!--case-box-->
			<div class="case-box col-xs-12 col-lg-6" style="display: block; position: absolute; left: 485px; top: 0px;">
				<div class="case-label">
					 Дело №04002
				</div>
				<h3 class="case-heading">Защита по взысканию задолженности по договору подряда</h3>
				<ul class="case-list">
					<li class="case-item case-problem">
					<h4 class="case-item-name">Проблема:</h4>
					<div class="case-item-text">
						<p>
							 Истец просил взыскать с ООО (Клиента) задолженность по договору подряда в&nbsp;<span style="line-height: 1.5em;">размере 170 000 рублей, судебные расходы в размере 15 000 рублей.</span>
						</p>
					</div>
 </li>
					<li class="case-item case-work">
					<h4 class="case-item-name">Проделанная работа:</h4>
					<div class="case-item-text">
						<ul>
							<li><span style="line-height: 1.5em;">Правовой анализ договора, документации по взаимоотношениям сторон</span></li>
							<li><span style="line-height: 1.5em;">Консультирование и разработка правовой позиции</span></li>
							<li><span style="line-height: 1.5em;">Представление интересов в суде первой инстанции</span></li>
							<li><span style="line-height: 1.5em;">Подготовка и подача возражений на исковое заявление</span></li>
							<li><span style="line-height: 1.5em;">Проведение переговоров о заключении мирового соглашения</span></li>
							<li><span style="line-height: 1.5em;">Подготовка текста мирового соглашения</span></li>
						</ul>
					</div>
 </li>
					<li class="case-item case-decision">
					<h4 class="case-item-name">Решение:</h4>
					<div class="case-item-text">
						<p>
 <a href="/files/Решения/04002.pdf">Решение суда</a>
						</p>
					</div>
 </li>
					<li class="case-item case-result">
					<h4 class="case-item-name">Результат:</h4>
					<div class="case-item-text">
						<p>
							 По мировому соглашению Клиент был обязан выплатить только судебные&nbsp;<span style="line-height: 1.5em;">расходы, от требований о взыскании 170 000 рублей Истец был вынужден отказаться.</span>
						</p>
					</div>
 </li>
				</ul>
			</div>
			 <!--case-box-->
			<div class="case-box col-xs-12 col-lg-6" style="display: none; position: absolute; left: 0px; top: 873px;">
				<div class="case-label">
					 Дело №04041
				</div>
				<h3 class="case-heading">Взыскание задолженности по договорам подряда, цессии</h3>
				<ul class="case-list">
					<li class="case-item case-problem">
					<h4 class="case-item-name">Проблема:</h4>
					<div class="case-item-text">
						<p>
							 Заказчик не оплатил принятый по договору подряда результат работ. Долг был уступлен по договору цессии
						</p>
						<p class="case-item-hidden">
							 Между обществами с ограниченной ответственностью был заключен договор подряда. Подрядчик свои обязательства по договору выполнил, в то время как Заказчик принял результат работ, но не оплатил его. Задолженность была уступлена по возмездному договору цессии.
						</p>
 <a class="case-item-more" href="#">Подробнее</a>
					</div>
 </li>
					<li class="case-item case-work">
					<h4 class="case-item-name">Проделанная работа:</h4>
					<div class="case-item-text">
						<ul>
							<li>Изучение представленных материалов для анализа правовой ситуации</li>
							<li>Консультирование Клиента относительно порядка, способов и перспектив разрешения дела по поставленным вопросам</li>
							<li>Подготовка и направление искового заявления в Арбитражный суд города Москвы.</li>
							<li>Представление интересов Клиента в АС города Москвы</li>
						</ul>
					</div>
 </li>
					<li class="case-item case-decision">
					<h4 class="case-item-name">Решение:</h4>
					<div class="case-item-text">
						<p>
 <a href="/files/Решения/04041.pdf">Решение суда</a>
						</p>
					</div>
 </li>
					<li class="case-item case-result">
					<h4 class="case-item-name">Результат:</h4>
					<div class="case-item-text">
						<p>
							 Суд удовлетворил требования в полном объеме, взыскал задолженность в размере 4 693 851,20 рублей, неустойку в размере 663 603,68 рублей, расходы по оплате&nbsp;
						</p>
					</div>
 </li>
				</ul>
			</div>
			 <!--case-box-->
			<div class="case-box col-xs-12 col-lg-6" style="display: none; position: absolute; left: 0px; top: 873px;">
				<div class="case-label">
					 Дело №04008
				</div>
				<h3 class="case-heading">Взыскание штрафа за нарушение условий госконтракта</h3>
				<ul class="case-list">
					<li class="case-item case-problem">
					<h4 class="case-item-name">Проблема:</h4>
					<div class="case-item-text">
						<p>
							 Орелгосзаказчик обратился в суд с требованиями о взыскании штрафа.
						</p>
						<p class="case-item-hidden">
							 КУ ОО «Орловский областной государственный заказчик» обратился в Арбитражный суд с требованием о взыскании с Клиента установленного госконтрактом штрафа в размере 831 800 рублей за несвоевременную установку системы видеонаблюдения на объекте.
						</p>
 <a class="case-item-more" href="#">Подробнее</a>
					</div>
 </li>
					<li class="case-item case-work">
					<h4 class="case-item-name">Проделанная работа:</h4>
					<div class="case-item-text">
						<ul>
							<li><span style="line-height: 1.5em;">Изучение представленных материалов для анализа правовой ситуации</span></li>
							<li><span style="line-height: 1.5em;">Подготовка и подача двух отзывов на исковое заявление в Арбитражный суд&nbsp;</span><span style="line-height: 1.5em;">Орловской области</span></li>
							<li><span style="line-height: 1.5em;">Приобщение к материалам дела необходимых доказательств</span></li>
							<li><span style="line-height: 1.5em;">Участие представителя в судебных заседаниях по делу</span></li>
						</ul>
					</div>
 </li>
					<li class="case-item case-decision">
					<h4 class="case-item-name">Решение:</h4>
					<div class="case-item-text">
						<p>
 <a href="/files/Решения/04008.pdf">Решение суда</a>
						</p>
					</div>
 </li>
					<li class="case-item case-result">
					<h4 class="case-item-name">Результат:</h4>
					<div class="case-item-text">
						<p>
							 Размер взысканного судом штрафа был уменьшен с 831 000 рублей до 300&nbsp;<span style="line-height: 1.5em;">000 рублей - в 2,77 раза.</span>
						</p>
						<p>
 <span>&nbsp;</span>
						</p>
					</div>
 </li>
				</ul>
			</div>
			 <!--case-box-->
		</div>
		 <!--row-->
		<div class="btn-more-pr">
			 Смотреть еще
		</div>
 <a href="/practice.html" class="btn btn-black" id="all-deal" style="display: none;">Смотреть все дела</a>
	</div>
</div>
<div class="opinions-block">
	<div class="container">
		<h2 class="opinions-block-heading"><span>Мнения людей о нашей работе</span></h2>
		<div class="opinion-box">
 <img src="/bitrix/images/anon-quote2.png" class="opinion-image" alt="Фото">
			<div class="opinion-info">
				<h3 class="opinion-name">ООО «Система ИТ»</h3>
				<p class="opinion-text">
					 Общество с ограниченной ответственностью «Система ИТ» благодарит коллектив Центра правовых услуг «Имею право» за проявленный высокий уровень компетентности при решении правовых проблем, а так же за внимательность и пунктуальность в работе в контрагентами. Особую роль для нас сыграла качественно оказанная правовая помощь при сотрудничестве с заказчиками при строительстве олимпийских объектов в рамках подготовки Зимней Олимпиады в Сочи-2014.
				</p>
				 <!--<a href="/images/otziv/SIT.JPG">Смотреть оригинал</a>--> <a href="/images/otziv/SIT.JPG" class="to-original" data-lightbox="image-1">Смотреть оригинал</a>
			</div>
		</div>
		 <!--opinion-box-->
		<div class="opinion-box">
 <img src="/bitrix/images/anon-quote2.png" class="opinion-image" alt="Фото">
			<div class="opinion-info">
				<h3 class="opinion-name">Татьяна </h3>
				<p class="opinion-text">
					 На протяжении всего времени сотрудничества ни разу не усомнилась в компетентности и профессионализме специалистов этой фирмы, а также получила желаемый результат. Подход юристов ЦПУ "Имею право" к решению поставленных задач радует и заставляет довериться во всем
				</p>
				 <!--<a href="/images/otziv/tatyana-otziv.jpg">Смотреть оригинал</a>--> <a href="/images/otziv/tatyana-otziv.jpg" class="to-original" data-lightbox="image-1">Смотреть оригинал</a>
			</div>
		</div>
		 <!--opinion-box--> <a href="/otzyivyi.html" class="btn btn-red">Читать другие мнения</a>
	</div>
	 <!--container-->
</div>
 <!-- container -->
<div class="about-block container">
	<h2 class="about-block-heading">О центре <span>«Имею Право»</span></h2>
	 <!--<img src="/bitrix/images/shutterstock_287595425.jpg" alt="" class="about-image">--> <a href="/bitrix/images/imeu-pravo-kontakt-b.jpg" data-lightbox="image-2"> <img alt="Внешний вид" src="/bitrix/images/imeu-pravo-kontakt-ms.jpg" class="about-image"> </a>
	<!--<p><span>Центр «Имею Право»</span> — команда <strong>профессиональных юристов</strong> с опытом работы от 3 до 10 лет. Каждый из нас получил высшее профессиональное образование, имеет красный диплом юриста, а также ряд дополнительных образований.</p>
 <p>В сфере наших интересов:</p>
 <ul>
 	<li>ведение судебных дел по гражданским, страховым, трудовым, семейным, налоговым, земельным, корпоративным спорам; защита прав потребителей;</li>
 	<li>консультирование по правовым вопросам и составление документов юридического характера, в том числе оформление и сопровождение сделок с недвижимым имуществом;</li>
 	<li>регистрация, реорганизация и ликвидация юридических лиц и индивидуальных предпринимателей;</li>
 	<li>юридическое сопровождение деятельности организаций и многое другое.</li>
 	<li>Наша юридическая фирма орел оказывает юридические услуги орел. Юридическая консультация в орле от наших юрист орел.</li>
 </ul>
 <p>Цена наших услуг устанавливается для каждой отдельной проблеме в зависимости от сложности дела, а не по фиксированному прайсу, что позволяет гибко подходить к политике ценообразования в интересах Клиента.
Нам доверяют сотни клиентов, и мы стараемся оправдать оказанное доверие. Отзывы организаций о сотрудничестве с нами можно прочитать здесь, а с отзыВами граждан можно ознакомиться в нашем офисе в Книге отзывов и предложений.
В случае успеха в разрешении судебного дела мы будем взыскивать с другой стороны спора в Вашу пользу понесенные расходы на оказание юридических услуг, что фактически может сделать оказанные услуги бесплатными.
  При сотрудничестве с нами Вы в кратчайшие сроки получите необходимый результат по хорошей цене и с отличным сервисом.</p>-->
	<p>
		 ✔ ЦПУ «Имею Право» ➡ команда профессионалов, оказывающих юридические услуги в Орле, объединенных общей идеей делать юридическую практику максимально результативной, юридические услуги принципиально честными и предельно понятными для Клиента.
	</p>
	<p>
		 ✔ Каждый из нас ➡ юрист в Орле, который получил высшее профессиональное образование, имеет красный диплом юриста, ряд дополнительных образований, а также является обладателем коэффициента IQ выше, чем у 91 % людей.
	</p>
	<p>
		 ✔ Сотрудники, оказывающие услуги юристов, обладают компетенцией в отдельных областях с профессиональным стажем от 3 до 10 лет, поэтому каждая консультация юриста будет дана грамотным специалистом по узким направлениям практики, что позволяет организации вести комплексную юридическую работу и качественно оказывать юридическую помощь.
	</p>
	<p>
		 ✔ И более того, мы входим в небольшую категорию тех счастливых людей, которые по-настоящему любят и умеют делать свою работу.
	</p>
</div>
 &nbsp;<br><?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>