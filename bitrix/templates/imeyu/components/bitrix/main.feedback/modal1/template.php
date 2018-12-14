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
                         
                         
           <form action="<?=POST_FORM_ACTION_URI?>" method="POST" >
<?=bitrix_sessid_post()?>
                <input type="hidden" name="sended" value="2" />
                <input class="hidden" type="text" name="formtype" value="boss">
 				<div class="form-box">
 					<textarea class="consult-textarea" name="comment" value="" id="" placeholder="Введите текст вопроса"></textarea>
 				</div>
 				<div class="form-box">
 					<input type="text" class="consult-text-input required "  name="phone" value="" placeholder="*Номер телефона в любом формате">
 					<p class="form-comment">Оставьте телефон для обратной связи</p>
 				</div>
<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
 					<div class="form-box"><input type="checkbox" name="checkterms" checked data-checkterms> Я согласен на <a rel="nofollow" href="//xn----8sbgjoysfj1l.xn--p1ai/politika-konfidenczialnosti-i-zashhityi-informaczii.html" target="_blank">обработку</a> моих персональных данных</div>
 				<input class="btn btn-red" name="submit" type="submit" value="ОТПРАВИТЬ">
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




<!--- divider -->
<!--
<div class="mfeedback">
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>

<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
<?=bitrix_sessid_post()?>
	<div class="mf-name">
		<div class="mf-text">
			<?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
		</div>
		<input type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>">
	</div>
	<div class="mf-email">
		<div class="mf-text">
			<?=GetMessage("MFT_EMAIL")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
		</div>
		<input type="text" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>">
	</div>

	<div class="mf-message">
		<div class="mf-text">
			<?=GetMessage("MFT_MESSAGE")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
		</div>
		<textarea name="MESSAGE" rows="5" cols="40"><?=$arResult["MESSAGE"]?></textarea>
	</div>

	<?if($arParams["USE_CAPTCHA"] == "Y"):?>
	<div class="mf-captcha">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
		<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
		<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
		<input type="text" name="captcha_word" size="30" maxlength="50" value="">
	</div>
	<?endif;?>
	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
	<input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
</form>
</div>
-->