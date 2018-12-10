






 </div>

 <footer class="page-footer">
 	<div class="container">
 		<div class="footer-props">
 			<button type="button" class="btn btn-white" data-toggle="modal" data-target="#consultModal">
			    Проконсультироваться
			</button>
			<a class="footer-phone" href="tel:+74862784784">(4862) <span>784-784</span></a>
			<a class="footer-mail" href="mailto:pravo@784784.ru">pravo@784784.ru</a>
			<div class="footer-address"><a href="/contacts.html">г. Орел, ул. Тургенева, 19</a></div>
 		</div> <!--footer-props-->
 		<div class="footer-owner">
 			<div class="footer-logo">
 				<a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo-white.png" alt=""></a>
 			</div>
 			<div class="footer-c">
 				© ЦПУ «Имею Право»<br>
				Все права защищены<br>
				ИНН 575307719025<br>
				ОГРНИП 312574029600073
 			</div>
 		</div> <!--footer-owner-->
 		<div class="footer-creator">
 			<span class="made-by">Создание сайта:</span>
 			<!--<a href="https://www.orelsite.ru/" target="_blank" class="orelss"></a>-->
 			<span class="orelss"></span>
 			<div style="margin-top:15px;">
 			 	<!-- Yandex.Metrika informer -->
<!--<a href="https://metrika.yandex.ru/stat/?id=20935111&amp;from=informer"
target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/20935111/3_1_FFFFFCFF_F5F5DCFF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:20935111,lang:'ru'});return false}catch(e){}" /></a>-->
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=20935111&amp;from=informer"
target="_blank" rel="nofollow"><img src="<?=SITE_TEMPLATE_PATH?>/images/metrika.jpg"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:20935111,lang:'ru'});return false}catch(e){}"/></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter20935111 = new Ya.Metrika({id:20935111,
                    webvisor:true,
                    clickmap:true,
                    trackHash:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/20935111" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script type="text/javascript" src="//api.venyoo.ru/wnew.js?wc=venyoo/default/science&widget_id=5298459561426944"></script>

            </div>
            
 		</div> <!--footer-creator-->
 		<div class="privacy_policy">Отправляя любую форму на сайте, вы соглашаетесь с <a rel="nofollow" href="/politika-konfidenczialnosti-i-zashhityi-informaczii.html">Политикой конфиденциальности</a>.</div>
 	</div> <!--container-->
 </footer> <!--page-footer-->



        </div>
        <div class="modal fade" id="consultModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
            <div class="modal-header">
            	Получите консультацию бесплатно
<br>по Вашей проблеме
            </div>
             
                 
           <form action="<?=POST_FORM_ACTION_URI?>" method="POST">
<?=bitrix_sessid_post()?>
                <input type="hidden" name="sended" value="2" />
 				<input class="hidden" type="text" name="formtype" value="consult">
 				<div class="form-box">
 					<textarea class="consult-textarea" name="MESSAGE" id="" placeholder="Опишите свою ситуацию" value=""><?=$arResult["MESSAGE"]?></textarea>
 					<p class="form-comment">Чтобы понимать Вашу проблему</p>
 				</div>
 				<div class="form-box">
 					<input type="text" class="consult-text-input "  value=""  name="user_name" id="" placeholder="*Номер телефона в любом формате">
 					<p class="form-comment">Чтобы перезвонить в течение 30 минут и проконсультировать Вас</p>
 				</div>
					<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
 					<div class="form-box"><input type="checkbox" name="checkterms" checked data-checkterms> Я согласен на <a rel="nofollow" href="/politika-konfidenczialnosti-i-zashhityi-informaczii.html" target="_blank">обработку</a> моих персональных данных</div>
 				<input class="btn btn-black" type="submit" name="submit" value="ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ">
 			</form>
			<p class="form-bottom-text">
	 			Заполните форму или позвоните по телефону:
	 			<a href="tel:4862784784"><span class="phone-text">(4862) <span>784-784</span></span></a>
	 		</p>
        </div>
    </div>
</div>
        <div class="modal fade" id="pavelModal" role="dialog" >
    <div class="modal-dialog">
        <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
            <div class="modal-header">
            	<span>Напишите мне,</span> я свяжусь с Вами    
            </div>
                         
                         
           <form action="/o-nas.html#pavelModal" method="POST" onSubmit="$('#sid_feedback').attr('value', '')">
                <input type="hidden" name="sended" value="2" />
                <input class="hidden" type="text" name="formtype" value="boss">
 				<div class="form-box">
 					<textarea class="consult-textarea" name="comment" value="" id="" placeholder="Введите текст вопроса"></textarea>
 				</div>
 				<div class="form-box">
 					<input type="text" class="consult-text-input required "  name="phone" value="" placeholder="*Номер телефона в любом формате">
 					<p class="form-comment">Оставьте телефон для обратной связи</p>
 				</div>
 					<div class="form-box"><input type="checkbox" name="checkterms" checked data-checkterms> Я согласен на <a rel="nofollow" href="//xn----8sbgjoysfj1l.xn--p1ai/politika-konfidenczialnosti-i-zashhityi-informaczii.html" target="_blank">обработку</a> моих персональных данных</div>
 				<input class="btn btn-red" name="btn_pavel" type="submit" value="ОТПРАВИТЬ">
 			</form>
        </div>
    </div>
</div>
        <button type="button" class="hidden" id="btn_success" data-toggle="modal" data-target="#popSuccess">
    Проконсультироваться
</button>
<div class="modal fade" id="popSuccess" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<div class="suc-head">Ваша заявка успешно отправлена</div>
                <div class="suc-text">В течение 30 минут мы свяжемся с вами</div>
                <div class="suc-close close" data-dismiss="modal">Готово</div>
            </div>
        </div>
    </div>
</div>
        <script src="/scripts/vendor/jquery-1.11.3.min.js"></script>
<script src="/scripts/vendor/cssua.js"></script>
<script src="/scripts/vendor/bootstrap.min.js"></script>
<script src="/scripts/vendor/masonry.min.js"></script>
<script src="/scripts/lightbox.js"></script>
<script src="/scripts/app.js"></script>
<script src="/scripts/jquery.checkterms.js"></script>
    </body>
</html>
