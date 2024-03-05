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

<div class="main-news__slider-wrapper">
    <div class="swiper main-news__swiper">
        <div class="swiper-wrapper">
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <a class="swiper-slide main-news__card" href="#">
                    <div class="main-news__card-img">
                        <picture class="picture">
                            <source type="image/webp" srcset="<?=$arItem["photo_path"]?>"><img class="picture__img" src="<?=$arItem["photo_path"]?>">
                        </picture>
                        <? if (isset($arItem["SECTION_NAME"])):?>
                            <span class="main-news__card-plug"><?=$arItem["SECTION_NAME"]?></span>
                        <? endif;?>
                    </div>
                    <p class="main-news__card-date"><?=$arItem["date"]?></p>
                    <p class="main-news__card-title"><?=$arItem["NAME"]?></p>
                </a>
            <?endforeach;?>
        </div>
    </div>
</div>
