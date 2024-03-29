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
     <div class="rew-footer-carousel">
<?foreach($arResult["ITEMS"] as $arItem):?>

<div class="item">
<div class="side-block side-opin">
<div class="inner-block">
  <div class="title">
    <div class="photo-block">
			<?if(isset($arItem["PREVIEW_PICTURE"])):?>
    <?$renderImage = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], Array("width" => 50, "height" => 50), BX_RESIZE_IMAGE_EXACT, false);?>
			  <img src="<?=$renderImage["src"]?>" alt="">

			<?else:?>
			  <img src="<?=SITE_TEMPLATE_PATH?>/img/no_photo.jpg" alt="">

			<?endif?>

    </div>
    <div class="name-block"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></div>
    <div class="pos-block"><?=$arItem["PROPERTIES"]["POSITION"]["VALUE"]?>, <?=$arItem["PROPERTIES"]["COMPANY"]["VALUE"]?></div>
  </div>
  <div class="text-block"><?=substr( $arItem["PREVIEW_TEXT"],0,120)?>...</div>
</div>
</div>
</div>
<?endforeach;?>
</div>
