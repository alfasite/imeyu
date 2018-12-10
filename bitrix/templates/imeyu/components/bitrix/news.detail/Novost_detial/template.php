<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="catalog-block container">
    	 			 	<div><h1><?=$arResult["NAME"]?></h1></div>
    	 			<span class="new-date"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
    	 			<div class="new-img"><img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"></div>
    	 			    <p><?echo $arResult["DETAIL_TEXT"];?></p>
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
 				 
                 
 				<form action="/news/obespechenie-iska-v-grazhdanskom-proczesse.html#form_consult" method="POST" onsubmit="$('#sid_feedback').attr('value', '')">
 				    
 				    <input type="hidden" name="sended" value="ok3">
 					<input class="hidden" type="text" name="formtype" value="consult">
 					<div class="form-box">
 						<textarea class="consult-textarea" name="comment" id="" placeholder="Опишите свою ситуацию" value=""></textarea>
 						<p class="form-comment">Чтобы понимать Вашу проблему</p>
 					</div>
 					<div class="form-box">
 						<input type="text" class="consult-text-input required " name="phone" id="" placeholder="*Номер телефона в любом формате" value="">
 						<p class="form-comment">Чтобы перезвонить в течение 30 минут и проконсультировать Вас</p>
 					</div>
 						<div class="form-box"><input type="checkbox" name="checkterms" checked="" data-checkterms=""> Я согласен на <a rel="nofollow" href="//xn----8sbgjoysfj1l.xn--p1ai/politika-konfidenczialnosti-i-zashhityi-informaczii.html" target="_blank">обработку</a> моих персональных данных</div>
 					<input class="btn btn-red" type="submit" value="ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ" name="btn_consult">
 				</form>
 			</div> <!--consult-form-->
 		</div> <!--row-->
 		<p class="form-bottom-text">
 			Заполните форму или позвоните по телефону:
 			<a href="tel:4862784784"><span class="phone-text">(4862) <span>784-784</span></span></a>
 		</p>
 	</div> <!--container-->
 </div> <!--consult-block-->
    	 			<div class="new-back"><a href="/news.html"><nobr></nobr>Все новости</a></div>
    	 			</div>

<!--

<div class="news-detail">
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<img
			class="detail_picture"
			border="0"
			src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
			width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
			height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
			alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
			title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
			/>
	<?endif?>
	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
	<?endif;?>
	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<h3><?=$arResult["NAME"]?></h3>
	<?endif;?>
	<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
		<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
	<?endif;?>
	<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
	<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
		<?echo $arResult["DETAIL_TEXT"];?>
	<?else:?>
		<?echo $arResult["PREVIEW_TEXT"];?>
	<?endif?>
	<div style="clear:both"></div>
	<br />
	<?foreach($arResult["FIELDS"] as $code=>$value):
		if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code)
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?
			if (!empty($value) && is_array($value))
			{
				?><img border="0" src="<?=$value["SRC"]?>" width="<?=$value["WIDTH"]?>" height="<?=$value["HEIGHT"]?>"><?
			}
		}
		else
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?><?
		}
		?><br />
	<?endforeach;
	foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>

		<?=$arProperty["NAME"]?>:&nbsp;
		<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
			<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
		<?else:?>
			<?=$arProperty["DISPLAY_VALUE"];?>
		<?endif?>
		<br />
	<?endforeach;
	if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
	{
		?>
		<div class="news-detail-share">
			<noindex>
			<?
			$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["~NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
			?>
			</noindex>
		</div>
		<?
	}
	?>
</div>
-->