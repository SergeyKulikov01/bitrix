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

<? if (isset($_REQUEST["CODE"])){
    require_once($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/include/pages/news/detail_news.php");
}else { ?>

<div class="news-content__categories" data-aos="fade-up">
    <div class="news-content__categories-wrapper">
        <a class="news-content__categories-item <? if ($arResult["SECTION"] == ''){echo "active";}?> btn-hover_parent no-scale" href="/news/">
            <div class="btn-hover_circle white"></div><span>Все</span>
        </a>
        <?foreach($arResult["SECTIONS"] as $arItem):?>
        <a class="news-content__categories-item <? if ($arResult["SECTION"]["PATH"][0]["CODE"] == $arItem["CODE"]){echo "active";}?> btn-hover_parent no-scale" href="<?=$arItem['SECTION_PAGE_URL']?>">
            <div class="btn-hover_circle white"></div><span><?=$arItem['NAME']?></span>
        </a>
        <?endforeach;?>
    </div>
</div>
<div class="news-content__listing" data-aos="fade-up">
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <a class="news-card" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
        <div class="news-card__top">
            <? if (isset($arItem["SECTION_NAME"])):?>
            <div class="news-card__plug"><?=$arItem["SECTION_NAME"]?></div>
            <? endif;?>
            <div class="news-card__bg">
                <picture class="picture">
                    <source type="image/webp" srcset="<?=$arItem["photo_path"]?>"><img class="picture__img" src="<?=$arItem["photo_path"]?>">
                </picture>
            </div>
        </div>
        <div class="news-card__bot">
            <div class="news-card__date"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></div>
            <div class="news-card__title"><?=$arItem["NAME"]?></div>
        </div>
    </a>
    <?endforeach;?>
</div>
<? if ($arResult["NAV_RESULT"]->result->num_rows < $arResult["NAV_RESULT"]->NavRecordCount){
    echo $arResult["NAV_STRING"];
}; ?>
<? }?>
