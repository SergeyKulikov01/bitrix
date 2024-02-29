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
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>

<div class="swiper-slide main-slider__slide">
    <div class="main-slider__slide-bg desktop" data-swiper-parallax="1440" data-bg-parallax="">
        <span class="picture"> <source type="image/webp" srcset="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="picture__img"> </span>
    </div>
    <div class="main-slider__slide-bg devices">
        <span class="picture"> <source type="image/webp" srcset="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="picture__img"> </span>
    </div>
    <div class="main-slider__content-icon" data-swiper-parallax="-500">
    </div>
    <div class="main-slider__content-title" data-swiper-parallax="-1000">
        <?echo $arItem["NAME"]?>
    </div>
    <?echo $arItem["PREVIEW_TEXT"]?><br>
    <br>
    <br>
    <div class="main-slider__content-bot" data-swiper-parallax="-2500">
        <a class="main-slider__content-button btn-hover_parent" href="#">
            <div class="btn-hover_circle white">
            </div>
            <p>
                Подробнее
            </p>
        </a>
    </div>
</div>
<?endforeach;?>

