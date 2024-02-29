<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="header-main__navigation">
    <?
    foreach($arResult as $arItem):?>
        <div class="header-main__navigation-col">
            <nav class="header-main__navigation-nav">
                <? foreach($arItem as $item):?>
                    <a class="header-main__navigation-link" href="<?=$item["LINK"]?>"><?=$item["TEXT"]?></a>
                <?endforeach?>
            </nav>
        </div>
    <?endforeach?>
</div>

<?endif?>

