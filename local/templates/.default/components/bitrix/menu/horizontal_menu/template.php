<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="menu popup-block">
		<ul class="">

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li class="<? echo $arItem["PARAMS"]["CLASS"]?>"><a href="<?=$arItem["LINK"]?>" class="<?=$arItem["PARAMS"]["COLOR"]?>"><?=$arItem["TEXT"]?></a>
				<ul>
					<?if(isset($arItem["PARAMS"]["TEXT"])):?>
					<div class="menu-text"><?=$arItem["PARAMS"]["TEXT"]?></div>
					<?endif?>

		<?else:?>
			<li class="<? echo $arItem["PARAMS"]["CLASS"]?>"><a href="<?=$arItem["LINK"]?>" class="parent"><?=$arItem["TEXT"]?></a>
				<ul>
					<?if(isset($arItem["PARAMS"]["TEXT"])):?>
					<div class="menu-text"><?=$arItem["PARAMS"]["TEXT"]?></div>
					<?endif?>
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li class="<? echo $arItem["PARAMS"]["CLASS"]?>"><a href="<?=$arItem["LINK"]?>" class="<?=$arItem["PARAMS"]["COLOR"]?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li class="<? echo $arItem["PARAMS"]["CLASS"]?>"><a href="<?=$arItem["LINK"]?>" class="<?=$arItem["PARAMS"]["COLOR"]?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?else:?>



		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>
</ul>
<a href="" class="btn-close"></a>
</div>
<div class="menu-clear-left"></div>
<?endif?>
