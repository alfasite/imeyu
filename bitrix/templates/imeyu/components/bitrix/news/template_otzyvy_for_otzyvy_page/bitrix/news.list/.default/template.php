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

<div class="news-list catalog-block container">
	<div><h1>Отзывы</h1></div>
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
<!-- self write template -->

<div class="opinion-box">
	<img src="/bitrix/templates/imeyu/images/quote2.png" class="opinion-image" alt="Фото">
	<div class="opinion-info">
		<h3 class="opinion-name"><?=$arItem["NAME"]?></h3>
		<p class="opinion-text"><?=$arItem["PROPERTIES"]["SHORT_TEXT"]["VALUE"]["TEXT"]?></p>
		<!--<a href="/[[+tv.file]]">Смотреть оригинал</a>-->
		<a href= "/bitrix/images/otziv/<?=$arItem["PROPERTIES"]["LINK_TO_IMG"]["VALUE"]?>"  class="to-original" data-lightbox="image-1">Смотреть оригинал</a>
	</div>
</div> <!--opinion-box-->

<!-- end self write template -->

<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
