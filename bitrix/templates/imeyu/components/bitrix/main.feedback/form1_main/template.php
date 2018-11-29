<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<!-- formConsultMain -->
<div class="consult-block" id="form_consult">
    <div class="container">
        <h2 class="consult-block-heading">Получите бесплатную консультацию по Вашей проблеме</h2>
        <div class="consult-box row">
            <div class="consult-free col-xs-12 col-md-6">
                <h3 class="consult-free-heading">Вы получите бесплатно:</h3>
                <ul>
                    <li class="analisys">
                        <h4 class="consult-name">Правовой анализ Вашей проблемы</h4>
                        <p class="consult-text">Наш юрист бесплатно проведет юридический анализ Вашей ситуации</p>
                    </li>
                    <li class="perspective">
                        <h4 class="consult-name">Заключение о перспективах дела</h4>
                        <p class="consult-text">После изучения ситуации мы составим заключение&nbsp;о перспективах разрешения дела</p>
                    </li>
                    <li class="variants">
                        <h4 class="consult-name">Варианты решения и стоимость</h4>
                        <p class="consult-text">Опишем оптимальные варианты решения
Вашей проблемы и рассчитаем их стоимость</p>
                    </li>
                </ul>
            </div> <!--consult-free-->
            <div class="consult-form col-xs-12 col-md-6">
                <div class="consult-form-header"><span>Заполните форму,</span> и мы свяжемся с Вами</div>
<!--                 [[!GET? &k=`success` &toPlaceholder=`success`]]
                [[!+success:ne=`1`:then=`
                   [[!FormIt? 
                       &hooks=`email, redirect`
                       &customValidators=`getSessionKey`
                       &redirectTo=`[[*id]]#form_consult`
                       &redirectParams=`{"success":"1"}`
                       &emailTpl=`formConsultTpl`
                       &emailSubject=`Запрос на получение консультации с сайта [[++site_name]]`
                       &emailTo=`pravo@784784.ru`
                       &emailFrom=`[[++mail_smtp_user]]`
                       &emailFromName=`[[++site_name]]`
                        &submitVar=`btn_consult`
                       &validate=`
                           comment:stripTags,
                           formtype:stripTags,
                           sended:contains=^ok3^,
                           phone:required:stripTags
                       `
                       &clearFieldsOnSuccess=`1`
                       &validationErrorMessage=`Возникли ошибки при отправке сообщения.`
                   ]]
               `:else=``]]
-->
                <form action="/#form_consult" method="POST" onSubmit="$('#sid_feedback').attr('value', '[[!setSessionKey? &id=`sid_feedback` &return=`1`]]')">
                    <input type="hidden" name="sended" value="2" />
                    <input type="text" class="hidden" name="formtype" value="consult">
                    <div class="form-box">
                        <textarea class="consult-textarea" name="comment" placeholder="Опишите свою ситуацию" value="[[!+fi.comment]]">[[!+fi.comment]]</textarea>
                        <p class="form-comment">Чтобы понимать Вашу проблему</p>
                    </div>
                    <div class="form-box">
                        <input type="text" class="consult-text-input required  [[!+fi.error.phone:ne=``:then=` error`:else=``]]" name="phone"  placeholder="*Номер телефона в любом формате" value="[[!+fi.phone]]">
                        <p class="form-comment">Чтобы перезвонить в течение 30 минут и проконсультировать Вас</p>
                    </div>
                    <div class="form-box">
                        <input type="checkbox" name="checkterms" checked data-checkterms> Я согласен на <a rel="nofollow" href="//xn----8sbgjoysfj1l.xn--p1ai/politika-konfidenczialnosti-i-zashhityi-informaczii.html" target="_blank">обработку</a> моих персональных данных
                    </div>
                    <input class="btn btn-red" type="submit"  value="ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ" name="btn_consult">
                </form>
            </div> <!--consult-form-->
        </div> <!--row-->
        <p class="form-bottom-text">
            Заполните форму или позвоните по телефону:
            <a href="tel:4862784784"><span class="phone-text">(4862) <span>784-784</span></span></a>
        </p>
    </div> <!--container-->
</div> <!--consult-block-->
<!-- /formConsultMain -->
