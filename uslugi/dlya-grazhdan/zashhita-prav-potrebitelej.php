<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Юрист по защите прав потребителей, услуги адвоката по правам потребителя");
$APPLICATION->SetPageProperty("description", "ЦПУ «Имею Право» предоставляет профессиональную юридическую помощь по защите прав потребителей в Орле. В нашей компании Вы получите бесплатную консультацию и гарантии нахождения оптимального решения по защите ваших прав.");
$APPLICATION->SetTitle("Title");
?><div class="page-content">
	<div class="breadcrumbs container">
		<ul>
			<ul class="B_crumbBox">
				<li class="B_firstCrumb" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="B_homeCrumb" itemprop="url" rel="Home" href="https://xn----8sbgjoysfj1l.xn--p1ai/"><span itemprop="title">Главная</span></a></li>
				<li itemscope="itemscope" class="B_crumb" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="B_crumb" itemprop="url" rel="✔ Центр Правовых Услуг ★★★★★ «ИМЕЮ ПРАВО» в Орле, Предоставляет услуги как для граждан, так и для бизнеса ➡ Узнать подробнее ✔" href="/uslugi.html"><span itemprop="title">Услуги</span></a></li>
				<li itemscope="itemscope" class="B_crumb" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="B_crumb" itemprop="url" rel="✔ Центр Правовых Услуг ★★★★★ «ИМЕЮ ПРАВО» Предоставляет юридические услуги для граждан, наш юрист по жилищным вопросам решит все жилищные споры ➡ Узнать подробнее ✔" href="/uslugi/dlya-grazhdan.html"><span itemprop="title">Для граждан</span></a></li>
				<li class="B_lastCrumb" itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="B_currentCrumb" itemprop="url" rel="ЦПУ «Имею Право» предоставляет профессиональную юридическую помощь по защите прав потребителей в Орле. В нашей компании Вы получите бесплатную консультацию и гарантии нахождения оптимального решения по защите ваших прав." href="/uslugi/dlya-grazhdan/zashhita-prav-potrebitelej.html"><span itemprop="title">Защита прав потребителей</span></a></li>
			</ul>
		</ul>
	</div>
	 <!--breadcrumbs-->
	<div class="catalog-block container">
		<div>
			<h1>Защита прав потребителей</h1>
		</div>
		<div class="row">
 <a href="/uslugi/dlya-grazhdan/zashhita-prav-potrebitelej/pokupka-nekachestvennogo-tovara.html" class="catalog-box col-xs-12 col-sm-6 col-md-3">
			<div class="catalog-box-inner">
 <img src="/bitrix/images/pokupka-nekachestvennogo-tovara.jpg" alt="" class="catalog-box-image" style="width: 105px; height: 104px; top: 30px; left: 52px;">
			</div>
			<h3 class="catalog-box-name"><span>Покупка некачественного товара</span></h3>
 </a> <!--catalog-box--> <a href="/uslugi/dlya-grazhdan/zashhita-prav-potrebitelej/okazanie-nekachestvennoj-uslugi.html" class="catalog-box col-xs-12 col-sm-6 col-md-3">
			<div class="catalog-box-inner">
 <img src="/bitrix/images/okazanie-nekach-uslug.jpg" alt="" class="catalog-box-image" style="width: 105px; height: 104px; top: 30px; left: 52px;">
			</div>
			<h3 class="catalog-box-name"><span>Оказание некачественной услуги</span></h3>
 </a> <!--catalog-box--> <a href="/uslugi/dlya-grazhdan/zashhita-prav-potrebitelej/inyie-voprosyi.html" class="catalog-box col-xs-12 col-sm-6 col-md-3">
			<div class="catalog-box-inner">
 <img src="/bitrix/images/in-sp-zashita-prav.jpg" alt="" class="catalog-box-image">
			</div>
			<h3 class="catalog-box-name"><span>Иные вопросы</span></h3>
 </a> <!--catalog-box-->
		</div>
		 <!--row-->
	</div>
	<div class="consult-block consult-catalog" id="form_lawyer">
		<div class="container">
			<h2 class="consult-block-heading">Затрудняетесь в выборе раздела? <span>Опишите свою ситуацию и получите бесплатно консультацию юриста</span></h2>
			<div class="consult-box row">
				<div class="consult-free col-xs-12 col-md-6">
					<h3 class="consult-free-heading">Вы получите бесплатно:</h3>
					<ul>
						<li class="analisys">
						<h4 class="consult-name">Правовой анализ Вашей проблемы</h4>
						<p class="consult-text">
							Наш юрист бесплатно проведет юридический анализ Вашей ситуации
						</p>
 </li>
						<li class="perspective">
						<h4 class="consult-name">Заключение о перспективах дела</h4>
						<p class="consult-text">
							После изучения ситуации мы составим заключение о перспективах разрешения дела
						</p>
 </li>
						<li class="variants">
						<h4 class="consult-name">Варианты решения и стоимость</h4>
						<p class="consult-text">
							Опишем оптимальные варианты решения Вашей проблемы и рассчитаем их стоимость
						</p>
 </li>
					</ul>
				</div>
				 <!--consult-free-->
				<div class="consult-form col-xs-12 col-md-6">
					<div class="consult-form-header">
						<span>Заполните форму</span>, и мы свяжемся с Вами
					</div>
					<form action="/uslugi/dlya-grazhdan/zashhita-prav-potrebitelej.html#form_lawyer" method="POST" onsubmit="$('#sid_feedback').attr('value', '')">
 <input type="hidden" name="sended" value="ok3"> <input class="hidden" type="text" name="formtype" value="lawyer">
						<div class="form-box">
 <textarea class="consult-textarea" name="comment" id="" placeholder="Опишите свою ситуацию"></textarea>
							<p class="form-comment">
								Чтобы понимать Вашу проблему
							</p>
						</div>
						<div class="form-box">
 <input type="text" class="consult-text-input required " name="phone" id="" placeholder="*Номер телефона в любом формате">
							<p class="form-comment">
								Чтобы перезвонить в течение 30 минут и проконсультировать Вас
							</p>
						</div>
						<div class="form-box">
							<input type="checkbox" name="checkterms" checked="" data-checkterms=""> Я согласен на <a rel="nofollow" href="//xn----8sbgjoysfj1l.xn--p1ai/politika-konfidenczialnosti-i-zashhityi-informaczii.html" target="_blank">обработку</a> моих персональных данных
						</div>
 <input class="btn btn-red" type="submit" name="btn_lawyer" value="ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ">
					</form>
				</div>
				 <!--consult-form-->
			</div>
			 <!--row-->
			<p class="form-bottom-text">
				 Заполните форму или позвоните по телефону: <a href="tel:4862784784"><span class="phone-text">(4862) <span>784-784</span></span></a>
			</p>
		</div>
		 <!--container-->
	</div>
	 <!--consult-block-->
	<div class="catalog-block container">
		<p>
			В&nbsp;ЦПУ «Имею Право» Вы&nbsp;можете получить&nbsp;<span id="docs-internal-guid-fe1bde86-8268-9a09-15a8-0076fe31564b"><span>профессиональную</span></span> помощь квалифицированных&nbsp;<span id="docs-internal-guid-403c9259-8268-d015-f83b-dc175e93bb55"><span>юристов</span></span> по&nbsp;защите прав потребителей: консультирование, составление и&nbsp;анализ различного рода документов и&nbsp;исков, представление интересов в&nbsp;суде и&nbsp;иные возможные механизмы защиты и&nbsp;реализации Ваших прав.
		</p>
		<p>
			Осуществляя защиту прав потребителя в Орле, мы гарантируем тщательную проработку каждого вопроса и&nbsp;оптимальное решение поставленных задач в&nbsp;установленные сроки.
		</p>
		<p>
			Обратившись к&nbsp;нам, Вы&nbsp;сразу начинаете решать свою проблему, получив бесплатную консультацию с&nbsp;юридически обоснованными ответами на&nbsp;главные вопросы: «Почему так получилось?», «Кто виноват?», «Что делать дальше?».
		</p>
	</div>
	 <!--catalog-block-->`
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>