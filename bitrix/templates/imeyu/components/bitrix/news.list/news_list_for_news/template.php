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

<h1>Статьи и новости</h1>
<div class="catalog-block container">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="opinion-box">
		<img class="opinion-image" border="0" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" />
		<div class="opinion-info">
			<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><h3 class="opinion-name"><?echo $arItem["NAME"]?></h3></a>
			<?foreach($arItem["DISPLAY_PROPERTIES"] as $k=>$v):?>
				<?if($v["NAME"] == "Дата публикации"):?>
				<span><?=$v["DISPLAY_VALUE"];?></span>
				<?endif?>
			<?endforeach;?>
			<p class="opinion-text">
			<?=$arItem["PREVIEW_TEXT"];?>
		</p>
		</div>
	</div>

<?endforeach;?>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
