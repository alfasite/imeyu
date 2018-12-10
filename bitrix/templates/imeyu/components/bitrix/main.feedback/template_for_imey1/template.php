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
<!-- insert -->
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
<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
<?=bitrix_sessid_post()?>
<div class="form-box">
<textarea class="consult-textarea" name="MESSAGE" rows="5" cols="40" placeholder="Опишите свою ситуацию"><?=$arResult["MESSAGE"]?></textarea>
<p class="form-comment">Чтобы понимать Вашу проблему</p>
</div>

<div class="form-box">
<input type="text" name="user_name" placeholder="*Номер телефона в любом формате" value="">
<p class="form-comment">Чтобы перезвонить в течение 30 минут и проконсультировать Вас</p>
</div>
                    <div class="form-box">
						<input type="checkbox" name="checkterms" checked data-checkterms> Я согласен на <a rel="nofollow" href="/politika-konfidenczialnosti-i-zashhityi-informaczii.php" target="_blank">обработку</a> моих персональных данных
                    </div>
<!--

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
-->
	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
	<input type="submit" name="submit" class="btn btn-red" value="ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ">
</form>

</div>
<p class="form-bottom-text">
            Заполните форму или позвоните по телефону:
            <a href="tel:4862784784"><span class="phone-text">(4862) <span>784-784</span></span></a>
        </p>
</div>
</div>